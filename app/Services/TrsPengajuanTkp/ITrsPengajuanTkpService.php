<?php
    namespace App\Services\TrsPengajuanTkp;
    use Illuminate\Http\Request;
    use App\Object\TrsPengajuanTkp\CreateTrsPengajuanTkpRequest;
    use App\Libraries\ServiceResult;
    
    interface ITrsPengajuanTkpService
    {
        public function Create(CreateTrsPengajuanTkpRequest $request);
    }
?>