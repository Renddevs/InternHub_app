<?php

namespace App\Http\Controllers;
use App\Services\RefProdi\IRefProdiService;
use Illuminate\Http\Request;
use App\Object\RefProdi\CreateRefProdiRequest;
use App\Object\RefProdi\UpdateRefProdiRequest;
use Illuminate\Http\Response;


class RefProdiController extends Controller
{
    private $_refProdiService;
    public function __construct(IRefProdiService $_refProdiService)
    {
        $this->_refProdiService = $_refProdiService;
    }

    public function Update(Request $request, string $id){
        $data = new UpdateRefProdiRequest();
        $data->id = $id;
        $data->prodi_name = $request->prodi_name;
        $data->tahun_ajaran = $request->tahun_ajaran;
        return json_encode($this->_refProdiService->Update($data));
    }

    public function Create(Request $request){
        $data = new CreateRefProdiRequest();
        $data->prodi_name = $request->prodi_name;
        $data->tahun_ajaran = $request->tahun_ajaran;
        return json_encode($this->_refProdiService->Create($data));
    }

    public function Get(string $id){
        return json_encode($this->_refProdiService->Get($id));
    }

    public function Delete(string $id){
        return json_encode($this->_refProdiService->Delete($id));
    }
}
