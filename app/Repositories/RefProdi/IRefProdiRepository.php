<?php
    namespace App\Repositories\RefProdi;
    use App\Libraries\ServiceResult;
    use App\Object\RefProdi\CreateRefProdiRequest;
    use App\Object\RefProdi\UpdateRefProdiRequest;

    interface IRefProdiRepository{
        public function Get(string $id);
        public function Create(CreateRefProdiRequest $request) : ServiceResult;
        public function Update(UpdateRefProdiRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>