<?php
    namespace App\Services\User;

    use App\Helpers\FileHelper\IFileHelper;
    use App\Repositories\User\IUserRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;
    use App\Object\User\CreateUserRequest;
    use App\Object\User\UpdateUserRequest;
    use App\Object\User\UserObject;
    use App\Object\User\LoginRespObject;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;


    use Exception;

    
    class UserService implements IUserService
    {
        private $_userRepository;
        private $_fileHelper;

        function __construct(IUserRepository $_userRepository, IFileHelper $_fileHelper)
        {
            $this->_userRepository = $_userRepository;
            $this->_fileHelper = $_fileHelper;
        }

        public function Login(string $username, string $password){
            $login = $this->_userRepository->Login($username, $password);
            $result = new ServiceResult();
            try {
                $login = $this->_userRepository->Login($username, $password);
                return $login;
            } catch (Exception $ex) {
                $result->Error("Error UserService(Login) ".$ex->getMessage());
            }
            return ["status" => $result];
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = new UserObject();
            try {
                $getUser = $this->_userRepository->Get($id);
                return $getUser;
            } catch (Exception $ex) {
                $result->Error("Error UserService(Get) ".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }

        public function UploadFile(Request $request){
            $result = new ServiceResult();
            try {
                $files = $request->file('files');
                return $this->_fileHelper->Upload($files);
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result->Response();
        }
        
        public function Create(CreateUserRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_userRepository->Create($request);
            } catch (Exception $ex) {
                $result->Error("Error in UserService(Create User) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Update(UpdateUserRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_userRepository->Update($request);
            } catch (Exception $ex) {
                $result->Error("Error in UserService(Update User) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_userRepository->Delete($id);
            } catch (Exception $ex) {
                $result->Error("Error in UserService(Delete User) : ".$ex->getMessage());
            }
            return $result;
        }
    }
    

?>