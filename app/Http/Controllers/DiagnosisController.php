<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Rule;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    private $allGejala;

    public function __construct()
    {
        $this->allGejala =  Gejala::get('id')->count();
    }

    private function newDiagnosis()
    {
        $modelDiagnosis = new Diagnosis();
        $modelDiagnosis->user_id = auth()->user()->id;
        return $modelDiagnosis;
    }

    private function lastDiagnosis()
    {
        return Diagnosis::where('user_id',  auth()->user()->id)->get()->last();
    }

    private function checkDiagnosis($idGejala)
    {
        $lastDiagnosis = $this->lastDiagnosis();

        if ($idGejala === 1) {
            return $this->newDiagnosis();
        }

        if ($lastDiagnosis->penyakit_id === null) {
            $answerLog = json_decode($lastDiagnosis->answer_log, true) ?? [];
            $maxAnswerLog = max(array_keys($answerLog));

            if ($maxAnswerLog === $this->allGejala) {
                return $this->newDiagnosis();
            }

            return $lastDiagnosis;
        }

        return $this->newDiagnosis();
    }

    public function diagnosis(Request $request)
    {
        $request->validate([
            'idgejala' => ['required', 'numeric', 'max:' . $this->allGejala, 'min:1'],
        ]);

        $requestFakta = [
            $request->idgejala => filter_var($request->value, FILTER_VALIDATE_BOOLEAN)
        ];

        $modelDiagnosis = $this->checkDiagnosis((int) $request->idgejala);
        $answerLog = json_decode($modelDiagnosis->answer_log, true) ?? [];
        $answerLog = $answerLog + $requestFakta;
        $modelDiagnosis->answer_log = json_encode($answerLog);
        $modelDiagnosis->save();

        //Aturan
        $rule = Rule::get(['penyakit_id', 'gejala_id']);
        $aturan = [];
        foreach ($rule as $key => $value) {
            $aturan[$value->penyakit_id][] = $value->gejala_id;
        }

        //Basis Fakta
        $fakta = $answerLog;

        //Inferensi 
        $terdeteksi = false;
        foreach ($aturan as $penyakitId => $gejala) {
            $apakahPenyakit = true;
            foreach ($gejala as $gejalaPenyakit) {
                $fakta[$gejalaPenyakit] = $fakta[$gejalaPenyakit] ?? false;
                if (!$fakta[$gejalaPenyakit]) {
                    $apakahPenyakit = false;
                    break;
                }
            }
            if ($apakahPenyakit) {
                if ($modelDiagnosis->penyakit_id == null) {
                    $modelDiagnosis->penyakit_id = $penyakitId;
                    $modelDiagnosis->save();
                }
                $penyakit = Penyakit::where('id', $modelDiagnosis->penyakit_id)->first('id');
                $terdeteksi = true;
            }
        }

        // $aturan = [
        //     1 => [1, 2, 3], // Penyakit 1 butuh gejala 1, 2, dan 3
        //     2 => [1, 4]     // Penyakit 2 butuh gejala 1 dan 4
        // ];
        

        // $fakta1 = [
        //     1 => true,
        //     2 => true,
        //     3 => true,
        //     maka langsung terdeteksi sesuai rule dan pertanyaan berhenti

        // $fakta2 = [
        //     1 => true,
        //     2 => false,
        //     mala langsung ke penyakit berikutnya 
        //     4 => ?
        //     5 => ? 
        // ];
        

        // Tidak ada penyakit yang terdeteksi
        if (!$terdeteksi && $request->idgejala == $this->allGejala) {
            return response()->json([
                'penyakitUnidentified' => true,
                'idPenyakit' => null,
                'idDiagnosis' => $modelDiagnosis->id,
            ]);
        }

        return response()->json([
            'idDiagnosis' => $modelDiagnosis->id,
            'idPenyakit' => $penyakit ?? null
        ]);
    }
}
