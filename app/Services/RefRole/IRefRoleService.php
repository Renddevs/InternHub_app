<?php
    namespace App\Services\RefRole;
    use Illuminate\Http\Request;
    use App\Object\RefRole\CreateRefRoleRequest;
    use App\Object\RefRole\UpdateRefRoleRequest;
    use App\Libraries\ServiceResult;
    use App\Object\RefRole\RefRoleObject;
    
    interface IRefRoleService
    {
        public function Get(string $id) : mixed;
        public function Create(CreateRefRoleRequest $request) : ServiceResult;
        public function Update(UpdateRefRoleRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>