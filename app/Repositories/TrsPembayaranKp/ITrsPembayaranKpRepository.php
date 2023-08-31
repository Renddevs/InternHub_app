<?php
    namespace App\Repositories\TrsPembayaranKp;
    use App\Libraries\ServiceResult;
    use App\Object\TrsPembayaranKp\CreateTrsPembayaranKpRequest;
    use App\Object\TrsPembayaranKp\UpdateTrsPembayaranKpRequest;

    interface ITrsPembayaranKpRepository{
        public function Create(CreateTrsPembayaranKpRequest $request) : ServiceResult;
    }
?>