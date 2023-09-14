<?php
    namespace App\Services\TrsBimbinganKp;
    use Illuminate\Http\Request;
    use App\Object\TrsBimbinganKp\CreateTrsBimbinganKpRequest;
    use App\Object\TrsBimbinganKp\ApproveTrsBimbinganKpRequest;
    use App\Libraries\ServiceResult;
    
    interface ITrsBimbinganKpService
    {
        public function Create(CreateTrsBimbinganKpRequest $request);
        public function Approve(ApproveTrsBimbinganKpRequest $request) : ServiceResult;
    }
?>