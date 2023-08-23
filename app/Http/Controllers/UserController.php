<?php

namespace App\Http\Controllers;
use App\Services\User\IUserService;
use Illuminate\Http\Request;
use App\Object\User\CreateUserRequest;
use App\Object\User\UpdateUserRequest;
use Illuminate\Http\Response;


class UserController extends Controller
{
    private $_userService;
    public function __construct(IUserService $_userService)
    {
        $this->_userService = $_userService;
    }

    public function Get(string $id){
        $result = $this->_userService->Get($id);
        return response()->json($result, $result["status"]->code);
    }
    
    public function Upload(Request $request){
        $result = $this->_userService->UploadFile($request);
        return response()->json($result, $result["status"]->code);
    }

    public function Create(Request $request){
        $data = new CreateUserRequest();
        $data->id_role = $request->id_role;
        $data->username = $request->username;
        $data->password = $request->password;
        $result = $this->_userService->Create($data);
        return response()->json($result, $result["status"]->code);
    }

    public function Update(Request $request, string $id){
        $data = new UpdateUserRequest();
        $data->id = $id;
        $data->id_role = $request->id_role;
        $data->username = $request->username;
        $data->password = $request->password;
        $result = $this->_userService->Update($data);
        return response()->json($result, $result["status"]->code);
    }

    public function Delete(string $id){
        $result = $this->_userService->Delete($id);
        return response()->json($result, $result["status"]->code);
    }
}
