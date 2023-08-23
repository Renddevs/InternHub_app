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
        return json_encode($this->_trsPendaftaranKpService->Update($data));
    }

    public function Create(Request $request){
        $data = new CreateTrsPendaftaranKpRequest();
        $data->tahun = $request->tahun;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->is_susulan = $request->is_susulan;
        $data->keterangan = $request->keterangan;
        return json_encode($this->_trsPendaftaranKpService->Create($data));
    }

    public function Get(string $id){
        return json_encode($this->_trsPendaftaranKpService->Get($id));
    }

    public function Delete(string $id){
        return json_encode($this->_trsPendaftaranKpService->Delete($id));
    }

    public function Verifikasi(string $id){
        return json_encode($this->_trsPendaftaranKpService->VPendaftaran($id));
    }
}
