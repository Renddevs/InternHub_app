<?php
    namespace App\Repositories\TrsPembayaranKp;
    use App\Libraries\ServiceResult;
    use App\Object\TrsPembayaranKp\CreateTrsPembayaranKpRequest;
    use App\Object\TrsPembayaranKp\ApproveTrsPembayaranKpRequest;

    interface ITrsPembayaranKpRepository{
        public function Create(CreateTrsPembayaranKpRequest $request) : ServiceResult;
        public function Approve(ApproveTrsPembayaranKpRequest $request) : ServiceResult;
    }
?>