<?php

namespace App\Http\Controllers;
use App\Services\TrsPembayaranKp\ITrsPembayaranKpService;
use Illuminate\Http\Request;
use App\Object\TrsPembayaranKp\CreateTrsPembayaranKpRequest;
use App\Object\TrsPembayaranKp\ApproveTrsPembayaranKpRequest;
use Illuminate\Http\Response;


class TrsPembayaranKpController extends Controller
{
    private $_trsPembayaranKpService;
    public function __construct(ITrsPembayaranKpService $_trsPembayaranKpService)
    {
        $this->_trsPembayaranKpService = $_trsPembayaranKpService;
    }

    public function Verifikasi(string $id){
        $result = $this->_trsPembayaranKpService->VPendaftaran($id);
        return response()->json($result, $result->code);
    }

    public function UploadBPembayaran(Request $request){
        $result = $this->_trsPembayaranKpService->UploadBPembayaran($request);
        return response()->json($result, $result->code);
    }

    public function Approve(Request $request){
        $data = new ApproveTrsPembayaranKpRequest();
        $data->id = $request->id;
        $data->is_approve = $request->is_approve;
        $result = $this->_trsPembayaranKpService->Approve($data);
        return response()->json($result, $result->code);
    }
}
