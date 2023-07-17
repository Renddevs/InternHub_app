<?php
    namespace App\Services\User;
    use Illuminate\Http\Request;
    
    interface IUserService
    {
        public function GetListJSON();
        public function UploadFile(Request $request);
    }
?>