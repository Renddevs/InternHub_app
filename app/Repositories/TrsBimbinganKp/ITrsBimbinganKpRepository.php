<?php
    namespace App\Repositories\TrsBimbinganKp;
    use App\Libraries\ServiceResult;
    use App\Object\TrsBimbinganKp\CreateTrsBimbinganKpRequest;
    use App\Object\TrsBimbinganKp\ApproveTrsBimbinganKpRequest;

    interface ITrsBimbinganKpRepository{
        public function Create(CreateTrsBimbinganKpRequest $request) : ServiceResult;
        public function Approve(ApproveTrsBimbinganKpRequest $request) : ServiceResult;
    }
?>