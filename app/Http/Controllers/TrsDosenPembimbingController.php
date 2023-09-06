<?php

namespace App\Http\Controllers;
use App\Services\TrsDosenPembimbing\ITrsDosenPembimbingService;
use Illuminate\Http\Request;
use App\Object\TrsDosenPembimbing\CreateTrsDosenPembimbingRequest;
use Illuminate\Http\Response;


class TrsDosenPembimbingController extends Controller
{
    private $_trsDosenPembimbingService;
    public function __construct(ITrsDosenPembimbingService $_trsDosenPembimbingService)
    {
        $this->_trsDosenPembimbingService = $_trsDosenPembimbingService;
    }

    public function PDosenPembimbing(Request $request){
        $data = new CreateTrsDosenPembimbingRequest();
        $data->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
        $data->id_mst_mahasiswa = $request->id_mst_mahasiswa;
        $data->id_mst_dosen = $request->id_mst_dosen;
        $result = $this->_trsDosenPembimbingService->PDosenPembimbing($data);
        return response()->json($result, 200);
    }
}
