<?php

namespace App\Http\Controllers;
use App\Services\TrsPengajuanTkp\ITrsPengajuanTkpService;
use Illuminate\Http\Request;
use App\Object\TrsPengajuanTkp\CreateTrsPengajuanTkpRequest;
use Illuminate\Http\Response;


class TrsPengajuanTkpController extends Controller
{
    private $_trsPengajuanTkpService;
    public function __construct(ITrsPengajuanTkpService $_trsPengajuanTkpService)
    {
        $this->_trsPengajuanTkpService = $_trsPengajuanTkpService;
    }

    public function Create(Request $request){
        $data = new CreateTrsPengajuanTkpRequest();
        $data->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
        $data->id_mst_mahasiswa = $request->id_mst_mahasiswa;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->nama_penanggung_jawab = $request->nama_penanggung_jawab;
        $data->email_perusahaan = $request->email_perusahaan;
        $data->noHp_penanggung_jawab = $request->noHp_penanggung_jawab;
        $data->keterangan = $request->keterangan;
        $result = $this->_trsPengajuanTkpService->Create($data);
        return response()->json($result, $result->code);
    }
}
