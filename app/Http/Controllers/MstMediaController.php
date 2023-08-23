<?php

namespace App\Http\Controllers;
use App\Services\MstMedia\IMstMediaService;
use Illuminate\Http\Request;
use App\Object\MstMedia\CreateMstMediaRequest;
use App\Object\MstMedia\UpdateMstMediaRequest;
use Illuminate\Http\Response;


class MstMediaController extends Controller
{
    private $_mstMediaService;
    public function __construct(IMstMediaService $_mstMediaService)
    {
        $this->_mstMediaService = $_mstMediaService;
    }

    public function Create(Request $request){
        $data = new CreateMstMediaRequest();
        $data->id_user = $request->id_user;
        $data->id_ref_prodi = $request->id_ref_prodi;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $result = $this->_mstMediaService->Create($data);
        return response()->json($result, $result["status"]->code);
    }

    public function Get(string $id){
        $result = $this->_mstMediaService->Get($id);
        return response()->json($result, $result["status"]->code);
    }

    public function Delete(string $id){
        $result = $this->_mstMediaService->Delete($id);
        return response()->json($result, $result["status"]->code);
    }
}
