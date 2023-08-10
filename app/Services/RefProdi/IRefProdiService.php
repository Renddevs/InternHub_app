<?php
    namespace App\Services\RefProdi;
    use Illuminate\Http\Request;
    use App\Object\RefProdi\CreateRefProdiRequest;
    use App\Object\RefProdi\UpdateRefProdiRequest;
    use App\Libraries\ServiceResult;
    
    interface IRefProdiService
    {
        public function Get(string $id);
        public function Create(CreateRefProdiRequest $request);
        public function Update(UpdateRefProdiRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>