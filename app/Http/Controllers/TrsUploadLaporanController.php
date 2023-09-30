<?php

namespace App\Http\Controllers;
use App\Services\TrsUploadLaporan\ITrsUploadLaporanService;
use Illuminate\Http\Request;
use App\Object\TrsUploadLaporan\CreateTrsUploadLaporanRequest;
use App\Object\TrsUploadLaporan\ApproveTrsUploadLaporanRequest;
use Illuminate\Http\Response;


class TrsUploadLaporanController extends Controller
{
    private $_trsUploadLaporanService;
    public function __construct(ITrsUploadLaporanService $_trsUploadLaporanService)
    {
        $this->_trsUploadLaporanService = $_trsUploadLaporanService;
    }

    public function UploadBPembayaran(Request $request){
        $result = $this->_trsUploadLaporanService->UploadLaporan($request);
        return response()->json($result, $result->code);
    }

    public function Approve(Request $request){
        $data = new ApproveTrsUploadLaporanRequest();
        $data->id = $request->id;
        $data->is_approve = $request->is_approve;
        $result = $this->_trsUploadLaporanService->Approve($data);
        return response()->json($result, $result->code);
    }
}
