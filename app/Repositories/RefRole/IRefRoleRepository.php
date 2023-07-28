<?php
    namespace App\Repositories\RefRole;
    use App\Libraries\ServiceResult;
    use App\Object\RefRole\CreateRefRoleRequest;
    use App\Object\RefRole\UpdateRefRoleRequest;
    use App\Object\RefRole\RefRoleObject;
    use App\Models\RefRole;

    interface IRefRoleRepository{
        public function Get(string $id) : mixed;
        public function GetList(string $name = "", bool $is_active);
        public function Create(CreateRefRoleRequest $request) : ServiceResult;
        public function Update(UpdateRefRoleRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
        public function Mapper(RefRole $model) : RefRoleObject;
    }
?>