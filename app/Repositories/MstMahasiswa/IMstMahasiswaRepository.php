<?php
    namespace App\Repositories\MstMahasiswa;
    use App\Libraries\ServiceResult;
    use App\Object\MstMahasiswa\CreateMstMahasiswaRequest;
    use App\Object\MstMahasiswa\UpdateMstMahasiswaRequest;

    interface IMstMahasiswaRepository{
        public function Get(string $id);
        public function Create(CreateMstMahasiswaRequest $request) : ServiceResult;
        public function Update(UpdateMstMahasiswaRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>