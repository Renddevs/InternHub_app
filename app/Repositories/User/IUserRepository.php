<?php
    namespace App\Repositories\User;
    use App\Libraries\ServiceResult;
    use App\Object\User\CreateUserRequest;
    use App\Object\User\UpdateUserRequest;

    interface IUserRepository{
        public function Get(string $id);
        public function Create(CreateUserRequest $request) : ServiceResult;
        public function Update(UpdateUserRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>