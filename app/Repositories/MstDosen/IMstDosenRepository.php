<?php
    namespace App\Repositories\MstDosen;
    use App\Libraries\ServiceResult;
    use App\Object\MstDosen\CreateMstDosenRequest;
    use App\Object\MstDosen\UpdateMstDosenRequest;

    interface IMstDosenRepository{
        public function Get(string $id);
        public function Create(CreateMstDosenRequest $request) : ServiceResult;
        public function Update(UpdateMstDosenRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>