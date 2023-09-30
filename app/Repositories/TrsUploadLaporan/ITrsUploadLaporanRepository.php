<?php
    namespace App\Repositories\TrsUploadLaporan;
    use App\Libraries\ServiceResult;
    use App\Object\TrsUploadLaporan\CreateTrsUploadLaporanRequest;
    use App\Object\TrsUploadLaporan\ApproveTrsUploadLaporanRequest;

    interface ITrsUploadLaporanRepository{
        public function Create(CreateTrsUploadLaporanRequest $request) : ServiceResult;
        public function Approve(ApproveTrsUploadLaporanRequest $request) : ServiceResult;
    }
?>