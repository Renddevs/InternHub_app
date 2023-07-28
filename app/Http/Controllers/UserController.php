<?php

namespace App\Http\Controllers;
use App\Services\User\IUserService;
use Illuminate\Http\Request;
use App\Object\User\CreateUserRequest;
use Illuminate\Http\Response;


class UserController extends Controller
{
    private $_userService;
    public function __construct(IUserService $_userService)
    {
        $this->_userService = $_userService;
    }

    public function Get(string $id){
        return json_encode($this->_userService->Get($id));
    }
    
    public function Upload(Request $request){
        return $this->_userService->UploadFile($request);
    }

    public function Create(Request $request){
        $data = new CreateUserRequest();
        $data->id_role = $request->id_role;
        $data->username = $request->username;
        $data->password = $request->password;
        //return json_encode($data);
        return json_encode($this->_userService->Create($data));
    }
}
