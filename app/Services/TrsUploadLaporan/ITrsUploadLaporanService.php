<?php
    namespace App\Services\TrsUploadLaporan;
    use Illuminate\Http\Request;
    use App\Object\TrsUploadLaporan\CreateTrsUploadLaporanRequest;
    use App\Object\TrsUploadLaporan\ApproveTrsUploadLaporanRequest;
    use App\Libraries\ServiceResult;
    
    interface ITrsUploadLaporanService
    {
        function UploadLaporan(Request $request) : ServiceResult;
        function Approve(ApproveTrsUploadLaporanRequest $request) : ServiceResult;
    }
?>