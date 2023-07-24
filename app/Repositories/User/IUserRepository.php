<?php
    namespace App\Repositories\User;
    use App\Libraries\ServiceResult;
    use App\Object\User\CreateUserRequest;

    interface IUserRepository{
        public function Create(CreateUserRequest $request) : ServiceResult;
    }
?>