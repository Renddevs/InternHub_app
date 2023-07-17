<?php

namespace App\Http\Controllers;
use App\Services\User\IUserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $_userService;
    public function __construct(IUserService $_userService)
    {
        $this->_userService = $_userService;
    }

    public function GetListJSON(){
        return $this->_userService->GetListJSON();
    }
    
    public function Upload(Request $request){
        return $this->_userService->UploadFile($request);
    }
}
