<?php

namespace App\Http\Controllers;
use App\Repositories\User\IUserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $_userRepository;
    public function __construct(IUserRepository $_userRepository)
    {
        $this->_userRepository = $_userRepository;
    }

    public function GetListJSON(){
        $data = $this->_userRepository->GetList();
        return response()->json([
            "success" => true,
            "code" => 200,
            "data" => $data
        ]);
    }
}
