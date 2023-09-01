<?php
    namespace App\Services\TrsPembayaranKp;
    use Illuminate\Http\Request;
    use App\Object\TrsPembayaranKp\CreateTrsPembayaranKpRequest;
    use App\Object\TrsPembayaranKp\ApproveTrsPembayaranKpRequest;
    use App\Libraries\ServiceResult;
    
    interface ITrsPembayaranKpService
    {
        public function VPendaftaran(string $npm) : ServiceResult;
        function UploadBPembayaran(Request $request) : ServiceResult;
        function Approve(ApproveTrsPembayaranKpRequest $request) : ServiceResult;
    }
?>