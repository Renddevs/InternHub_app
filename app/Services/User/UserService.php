<?php
    namespace App\Services\User;

    use App\Repositories\User\IUserRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;

    
    class UserService implements IUserService
    {
        private $_userRepository;

        function __construct(IUserRepository $_userRepository)
        {
            $this->_userRepository = $_userRepository;
        }

        public function GetListJSON()
        {
            $result = new DataServiceResult();
            try{
                $data = $this->_userRepository->GetList();
                $result->OK($data);
                return response()->json($result);

            }catch(Exception $ex){
                $result->Error($ex->getMessage());
                return response()->json($result);
            }
        }
    }
    

?>