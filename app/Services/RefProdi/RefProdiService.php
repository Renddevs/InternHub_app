<?php
    namespace App\Services\RefProdi;

    use App\Repositories\RefProdi\IRefProdiRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;
    use App\Object\RefProdi\CreateRefProdiRequest;
    use App\Object\RefProdi\UpdateRefProdiRequest;
    use App\Object\RefProdi\RefProdiObject;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;


    use Exception;

    
    class RefProdiService implements IRefProdiService
    {
        private $_refProdiRepository;

        function __construct(IRefProdiRepository $_refProdiRepository)
        {
            $this->_refProdiRepository = $_refProdiRepository;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = new UserObject();
            try {
                $refProdi = $this->_refProdiRepository->Get($id);
                return $refProdi;
            } catch (Exception $ex) {
                $result->Error("Error RefProdiService(Get) ".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }
        
        public function Create(CreateRefProdiRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_refProdiRepository->Create($request);
            } catch (Exception $ex) {
                $result->Error("Error in RefProdiService(Create RefProdi) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Update(UpdateRefProdiRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_refProdiRepository->Update($request);
            } catch (Exception $ex) {
                $result->Error("Error in RefProdiService(Update RefProdi) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_refProdiRepository->Delete($id);
            } catch (Exception $ex) {
                $result->Error("Error in RefProdiService(Delete RefProdi) : ".$ex->getMessage());
            }
            return $result;
        }
    }
    

?>