<?php
    namespace App\Services\RefRole;

    use App\Repositories\RefRole\IRefRoleRepository;
    use App\Libraries\ServiceResult;
    use App\Object\RefRole\CreateRefRoleRequest;
    use App\Object\RefRole\UpdateRefRoleRequest;
    use App\Object\RefRole\RefRoleObject;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;


    use Exception;

    
    class RefRoleService implements IRefRoleService
    {
        private $_refroleRepository;

        function __construct(IRefRoleRepository $_refRoleRepository)
        {
            $this->_refRoleRepository = $_refRoleRepository;
        }

        public function Get(string $id) : mixed
        {
            $result = new ServiceResult();
            $data = new RefRoleObject(); 
            try {
                $getRefRole = $this->_refRoleRepository->Get($id);
                return $getRefRole;
            } catch (Exception $ex) {
                $result->Error("Error in RefRoleService(Get Ref Role) : ".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }
        
        public function Create(CreateRefRoleRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_refRoleRepository->Create($request);
            } catch (Exception $ex) {
                $result->Error("Error in RefRoleService(Create Ref Role) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Update(UpdateRefRoleRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_refRoleRepository->Update($request);
            } catch (Exception $ex) {
                $result->Error("Error in RefRoleService(Update Ref Role) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_refRoleRepository->Delete($id);
            } catch (Exception $ex) {
                $result->Error("Error in RefRoleService(Delete Ref Role) : ".$ex->getMessage());
            }
            return $result;
        }

        public function GetList(string $name = "", bool $is_active)
        {
            $result = new ServiceResult();
            try {
                $data = $this->_refRoleRepository->GetList($name, $is_active);
                return $data;
            } catch (Exception $ex) {
                $result->Error("Error RefRoleService(GetList) : ".$ex->getMessage());
            }
            return ["data"=> $data, "status"=> $status];
        }
    }
    

?>