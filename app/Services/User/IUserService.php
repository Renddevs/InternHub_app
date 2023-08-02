<?php
    namespace App\Services\User;
    use Illuminate\Http\Request;
    use App\Object\User\CreateUserRequest;
    use App\Object\User\UpdateUserRequest;
    use App\Libraries\ServiceResult;
    
    interface IUserService
    {
        public function Get(string $id);
        public function UploadFile(Request $request);
        public function Create(CreateUserRequest $request);
        public function Update(UpdateUserRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>