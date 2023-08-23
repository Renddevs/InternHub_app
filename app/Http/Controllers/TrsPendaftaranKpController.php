<?php

namespace App\Http\Controllers;
use App\Services\TrsPendaftaranKp\ITrsPendaftaranKpService;
use Illuminate\Http\Request;
use App\Object\TrsPendaftaranKp\CreateTrsPendaftaranKpRequest;
use App\Object\TrsPendaftaranKp\UpdateTrsPendaftaranKpRequest;
use Illuminate\Http\Response;


class TrsPendaftaranKpController extends Controller
{
    private $_trsPendaftaranKpService;
    public function __construct(ITrsPendaftaranKpService $_trsPendaftaranKpService)
    {
        $this->_trsPendaftaranKpService = $_trsPendaftaranKpService;
    }

    public function Update(Request $request, string $id){
        $data = new UpdateTrsPendaftaranKpRequest();
        $data->id = $id;
        $data->id_ref_prodi = $request->id_ref_prodi;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $result = $this->_trsPendaftaranKpService->Update($data);
        return response()->json($result, $result->code);
    }

    public function Create(Request $request){
        $data = new CreateTrsPendaftaranKpRequest();
        $data->tahun = $request->tahun;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->is_susulan = $request->is_susulan;
        $data->keterangan = $request->keterangan;
        $result = $this->_trsPendaftaranKpService->Create($data);
        return response()->json($result, $result->c);
    }

    public function Get(string $id){
        $result = $this->_trsPendaftaranKpService->Get($id);
        return response($result, $result->code);
    }

    public function Delete(string $id){
        $result = $this->_trsPendaftaranKpService->Delete($id);
        return response()->json($result, $result->code);
    }

    public function Verifikasi(string $id){
        $result = $this->_trsPendaftaranKpService->VPendaftaran($id);
        return response()->json($result, $result->code);
    }
}
