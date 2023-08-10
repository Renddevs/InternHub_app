<?php
    namespace App\Services\MstMahasiswa;
    use Illuminate\Http\Request;
    use App\Object\MstMahasiswa\CreateMstMahasiswaRequest;
    use App\Object\MstMahasiswa\UpdateMstMahasiswaRequest;
    use App\Libraries\ServiceResult;
    
    interface IMstMahasiswaService
    {
        public function Get(string $id);
        public function Create(CreateMstMahasiswaRequest $request);
        public function Update(UpdateMstMahasiswaRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>