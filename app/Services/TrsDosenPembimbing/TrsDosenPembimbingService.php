<?php
    namespace App\Services\TrsDosenPembimbing;

    use App\Repositories\TrsDosenPembimbing\ITrsDosenPembimbingRepository;
    use App\Libraries\ServiceResult;
    use App\Object\TrsDosenPembimbing\CreateTrsDosenPembimbingRequest;
    use Illuminate\Http\Request;    
    use Illuminate\Http\Response;
    use Validator;
    use DB;
    use Exception;    
    use Illuminate\Support\Str;
    class TrsDosenPembimbingService implements ITrsDosenPembimbingService
    {
        private $_trsDosenPembimbingRepository;

        function __construct(ITrsDosenPembimbingRepository $_trsDosenPembimbingRepository)
        {
            $this->_trsDosenPembimbingRepository = $_trsDosenPembimbingRepository;
        }

        public function PDosenPembimbing(CreateTrsDosenPembimbingRequest $request)
        {
            $result = new ServiceResult();
            try {
                $create = $this->_trsDosenPembimbingRepository->Create($request);
                return $create;
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }
    }
?>