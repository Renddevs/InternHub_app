<?php
    namespace App\Services\TrsBimbinganKp;

    use App\Repositories\TrsBimbinganKp\ITrsBimbinganKpRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;
    use App\Object\TrsBimbinganKp\CreateTrsBimbinganKpRequest;
    use App\Object\TrsBimbinganKp\ApproveTrsBimbinganKpRequest;
    use Illuminate\Http\Request;    
    use Illuminate\Http\Response;
    use Exception;


    
    class TrsBimbinganKpService implements ITrsBimbinganKpService
    {
        private $_trsBimbinganKpRepository;

        function __construct(ITrsBimbinganKpRepository $_trsBimbinganKpRepository)
        {
            $this->_trsBimbinganKpRepository = $_trsBimbinganKpRepository;
        }
        
        public function Create(CreateTrsBimbinganKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_trsBimbinganKpRepository->Create($request);
            } catch (Exception $ex) {
                $result->Error("Error in TrsBimbinganKpService(Create TrsBimbinganKp) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Approve(ApproveTrsBimbinganKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_trsBimbinganKpRepository->Approve($request);
            } catch (Exception $ex) {
                $result->Error("Error in TrsBimbinganKpService(Approve TrsBimbinganKp) : ".$ex->getMessage());
            }
            return $result;
        }
    }
?>