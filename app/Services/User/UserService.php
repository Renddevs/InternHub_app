<?php
    namespace App\Services\User;

    use App\Repositories\User\IUserRepository;
    
    class UserService implements IUserService
    {
        private $_userRepository;

        function __construct(IUserRepository $_userRepository)
        {
            $this->_userRepository = $_userRepository;
        }

        public function GetListJSON()
        {
            try{
                $data = $this->_userRepository->GetList();
                return response()->json([
                    "success" => true,
                    "code" => 200,
                    "message" => "",
                    "data" =>  $data
                ]);

            }catch(Exceptio $ex){
                return response()->json([
                    "success" => false,
                    "code" => 500,
                    "message" => $ex->getMessage()
                ]);
            }
        }
    }
    

?>