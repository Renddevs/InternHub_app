<?php
    namespace App\Repositories\MstDosen;
    use App\Libraries\ServiceResult;
    use App\Object\User\CreateMstDosenRequest;
    use App\Object\User\UpdateMstDosenRequest;

    interface IUserRepository{
        public function Get(string $id);
        public function Create(CreateMstDosenRequest $request) : ServiceResult;
        public function Update(UpdateMstDosenRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>