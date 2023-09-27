<?php
    namespace App\Repositories\TrsPengajuanTkp;
    use App\Libraries\ServiceResult;
    use App\Object\TrsPengajuanTkp\CreateTrsPengajuanTkpRequest;

    interface ITrsPengajuanTkpRepository{
        public function Create(CreateTrsPengajuanTkpRequest $request) : ServiceResult;
    }
?>