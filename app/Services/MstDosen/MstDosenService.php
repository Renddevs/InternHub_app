<?php
    namespace App\Services\MstDosen;

    use App\Repositories\MstDosen\IMstDosenRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;
    use App\Object\MstDosen\CreateMstDosenRequest;
    use App\Object\MstDosen\UpdateMstDosenRequest;
    use App\Object\MstDosen\MstDosenObject;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;


    use Exception;

    
    class MstDosenService implements IMstDosenService
    {
        private $_mstDosenRepository;

        function __construct(IMstDosenRepository $_mstDosenRepository)
        {
            $this->_mstDosenRepository = $_mstDosenRepository;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = new MstDosenObject();
            try {
                $mstDosen = $this->_mstDosenRepository->Get($id);
                return $mstDosen;
            } catch (Exception $ex) {
                $result->Error("Error MstDosenService(Get) ".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }
        
        public function Create(CreateMstDosenRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_mstDosenRepository->Create($request);
            } catch (Exception $ex) {
                $result->Error("Error in MstDosenService(Create MstDosen) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Update(UpdateMstDosenRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_mstDosenRepository->Update($request);
            } catch (Exception $ex) {
                $result->Error("Error in MstDosenService(Update MstDosen) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_mstDosenRepository->Delete($id);
            } catch (Exception $ex) {
                $result->Error("Error in MstDosenService(Delete MstDosen) : ".$ex->getMessage());
            }
            return $result;
        }
    }
    

?>