<?php
    namespace App\Repositories\User;
    use App\Models\User;
    use App\Object\User\CreateUserRequest;
    use App\Object\User\UserObject;
    use App\Object\User\UpdateUserRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;
    use App\Repositories\RefRole\IRefRoleRepository;

    use Exception;

    class UserRepository implements IUserRepository
    {
        private $model;
        private $_refRoleRepository;

        public function __construct(User $model, IRefRoleRepository $_refRoleRepository)
        {
            $this->model = $model;
            $this->_refRoleRepository = $_refRoleRepository;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = null;
            try {
                $user = $this->model::find($id);
                if($user != null){
                    $data = $user->get()->map(fn($user) => $this->Mapper($user))->first();
                }
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error UserRepository(Get)".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }

        public function Create(CreateUserRequest $request) : ServiceResult
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

        public function Update(UpdateUserRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = User::find($request->id);
                $user->username = $request->username;
                $user->password = $request->password;
                $user->id_role = $request->id_role;
                $user->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = User::find($request->id);
                $user->delete();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Mapper(User $model) : UserObject
        {
            $user = new UserObject();
            $user->id = $model->id;
            $user->role = $this->_refRoleRepository->Mapper($model->refRole);
            $user->username = $model->username;
            return $user;
        }
    }
?>