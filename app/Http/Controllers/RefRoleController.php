<?php

namespace App\Http\Controllers;
use App\Services\RefRole\IRefRoleService;
use Illuminate\Http\Request;
use App\Object\RefRole\CreateRefRoleRequest;
use App\Object\RefRole\UpdateRefRoleRequest;
use Illuminate\Http\Response;


class RefRoleController extends Controller
{
    private $_RefRoleService;
    public function __construct(IRefRoleService $_RefRoleService)
    {
        $this->_RefRoleService = $_RefRoleService;
    }

    public function Update(Request $request, string $id){
        $data = new UpdateRefRoleRequest();
        $data->id = $id;
        $data->name = $request->name;
        $data->is_active = $request->is_active;
        return json_encode($this->_RefRoleService->Update($data));
    }

    public function Create(Request $request){
        $data = new CreateRefRoleRequest();
        $data->name = $request->name;
        $data->is_active = $request->is_active;
        return json_encode($this->_RefRoleService->Create($data));
    }

    public function Get(string $id){
        return json_encode($this->_RefRoleService->Get($id));
    }

    public function GetList(string $name = "", bool $is_active){
        return json_encode($this->_RefRoleService->GetList($name, $is_active));
    }

    public function Delete(string $id){
        return json_encode($this->_RefRoleService->Delete($id));
    }
}
