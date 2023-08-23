<?php

namespace App\Http\Controllers;
use App\Services\MstMahasiswa\IMstMahasiswaService;
use Illuminate\Http\Request;
use App\Object\MstMahasiswa\CreateMstMahasiswaRequest;
use App\Object\MstMahasiswa\UpdateMstMahasiswaRequest;
use Illuminate\Http\Response;


class MstMahasiswaController extends Controller
{
    private $_mstMahasiswaService;
    public function __construct(IMstMahasiswaService $_mstMahasiswaService)
    {
        $this->_mstMahasiswaService = $_mstMahasiswaService;
    }

    public function Update(Request $request, string $id){
        $data = new UpdateMstMahasiswaRequest();
        $data->id = $id;
        $data->npm = $request->npm;
        $data->id_ref_prodi = $request->id_ref_prodi;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $result = $this->_mstMahasiswaService->Update($data);
        return response()->json($result, $result["status"]->code);
    }

    public function Create(Request $request){
        $data = new CreateMstMahasiswaRequest();
        $data->id_user = $request->id_user;
        $data->id_ref_prodi = $request->id_ref_prodi;
        $data->npm = $request->npm;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $result = $this->_mstMahasiswaService->Create($data);
        return response()->json($result, $result["status"]->code);
    }

    public function Get(string $id){
        $result = $this->_mstMahasiswaService->Get($id);
        return response()->json($result, $result["status"]->code);
    }

    public function Delete(string $id){
        $result = $this->_mstMahasiswaService->Delete($id);
        return response()->json($result, $result["status"]->code);
    }
}
