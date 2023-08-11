<?php
    namespace App\Services\MstMedia;

    use App\Repositories\MstMedia\IMstMediaRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;
    use App\Object\MstMedia\CreateMstMediaRequest;
    use App\Object\MstMedia\UpdateMstMediaRequest;
    use App\Object\MstMedia\MstMediaObject;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;


    use Exception;

    
    class MstMediaService implements IMstMediaService
    {
        private $_mstMediaRepository;

        function __construct(IMstMediaRepository $_mstMediaRepository)
        {
            $this->_mstMediaRepository = $_mstMediaRepository;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = new MstMediaObject();
            try {
                $mstMedia = $this->_mstMediaRepository->Get($id);
                return $mstMedia;
            } catch (Exception $ex) {
                $result->Error("Error MstMediaService(Get) ".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }
        
        public function Create(CreateMstMediaRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_mstMediaRepository->Create($request);
            } catch (Exception $ex) {
                $result->Error("Error in MstMediaService(Create MstMedia) : ".$ex->getMessage());
            }
            return $result;
        }
        
        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_mstMediaRepository->Delete($id);
            } catch (Exception $ex) {
                $result->Error("Error in MstMediaService(Delete MstMedia) : ".$ex->getMessage());
            }
            return $result;
        }
    }
    

?>