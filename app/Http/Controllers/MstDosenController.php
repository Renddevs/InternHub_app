<?php

namespace App\Http\Controllers;
use App\Services\MstDosen\IMstDosenService;
use Illuminate\Http\Request;
use App\Object\MstDosen\CreateMstDosenRequest;
use App\Object\MstDosen\UpdateMstDosenRequest;
use Illuminate\Http\Response;


class MstDosenController extends Controller
{
    private $_mstDosenService;
    public function __construct(IMstDosenService $_mstDosenService)
    {
        $this->_mstDosenService = $_mstDosenService;
    }

    public function Update(Request $request, string $id){
        $data = new UpdateMstDosenRequest();
        $data->id = $id;
        $data->id_ref_prodi = $request->id_ref_prodi;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $result = $this->_mstDosenService->Update($data);
        return response()->json($result, $result->code);
    }

    public function Create(Request $request){
        $data = new CreateMstDosenRequest();
        $data->id_user = $request->id_user;
        $data->id_ref_prodi = $request->id_ref_prodi;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $result = $this->_mstDosenService->Create($data);
    }

    public function Get(string $id){
        $result = $this->_mstDosenService->Get($id);
        return response()->json($result, $result->code);
    }

    public function Delete(string $id){
        $result = $this->_mstDosenService->Delete($id);
        return response()->json($result, $result->code);
    }
}
