<?php
    namespace App\Services\TrsPengajuanTkp;

    use App\Repositories\TrsPengajuanTkp\ITrsPengajuanTkpRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;
    use App\Object\TrsPengajuanTkp\CreateTrsPengajuanTkpRequest;
    use Illuminate\Http\Request;    
    use Illuminate\Http\Response;
    use Exception;


    
    class TrsPengajuanTkpService implements ITrsPengajuanTkpService
    {
        private $_trsPengajuanTkpRepository;

        function __construct(ITrsPengajuanTkpRepository $_trsPengajuanTkpRepository)
        {
            $this->_trsPengajuanTkpRepository = $_trsPengajuanTkpRepository;
        }
        
        public function Create(CreateTrsPengajuanTkpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_trsPengajuanTkpRepository->Create($request);
            } catch (Exception $ex) {
                $result->Error("Error in TrsPengajuanTkpService(Create TrsPengajuanTkp) : ".$ex->getMessage());
            }
            return $result;
        }
    }
?>