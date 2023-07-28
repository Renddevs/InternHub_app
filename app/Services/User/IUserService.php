<?php
    namespace App\Services\User;
    use Illuminate\Http\Request;
    use App\Object\User\CreateUserRequest;
    use App\Libraries\ServiceResult;
    
    interface IUserService
    {
        public function Get(string $id);
        public function UploadFile(Request $request);
        public function Create(CreateUserRequest $request);
    }
?>