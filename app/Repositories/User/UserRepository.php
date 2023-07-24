<?php
    namespace App\Repositories\User;
    use App\Models\User;
    use App\Object\User\CreateUserRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;

    use Exception;

    class UserRepository implements IUserRepository
    {
        private $model;

        public function __construct(User $model)
        {
            $this->model = $model;
        }

        public function CreateUser(CreateUserRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = new User;
                $user->id_role = $request->id_role;
                $user->username = $request->username;
                $user->password = $request->password;
                $user->create_by = "SYSTEM";
                $user->created_at = date("Y-m-d h:i:s");
                $user->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in UserRepository(CreateUser) : ".$ex->getMessage());
            }
            
            return $result;
        }


    }
?>