<?php

namespace App\Http\Controllers;
use App\Services\TrsBimbinganKp\ITrsBimbinganKpService;
use Illuminate\Http\Request;
use App\Object\TrsBimbinganKp\CreateTrsBimbinganKpRequest;
use App\Object\TrsBimbinganKp\ApproveTrsBimbinganKpRequest;
use Illuminate\Http\Response;


class TrsBimbinganKpController extends Controller
{
    private $_trsBimbinganKpService;
    public function __construct(ITrsBimbinganKpService $_trsBimbinganKpService)
    {
        $this->_trsBimbinganKpService = $_trsBimbinganKpService;
    }

    public function Approve(Request $request){
        $data = new ApproveTrsBimbinganKpRequest();
        $data->id_trs_bimbingan_kp = $request->id_trs_bimbingan_kp;
        $result = $this->_trsBimbinganKpService->Approve($data);
        return response()->json($result, $result->code);
    }

    public function Create(Request $request){
        $data = new CreateTrsBimbinganKpRequest();
        $data->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
        $data->id_mst_mahasiswa = $request->id_mst_mahasiswa;
        $data->id_mst_dosen = $request->id_mst_dosen;
        $data->topik_bimbingan = $request->topik_bimbingan;
        $result = $this->_trsBimbinganKpService->Create($data);
        return response()->json($result, $result->code);
    }
}
