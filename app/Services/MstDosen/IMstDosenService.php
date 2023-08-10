<?php
    namespace App\Services\MstDosen;
    use Illuminate\Http\Request;
    use App\Object\MstDosen\CreateMstDosenRequest;
    use App\Object\MstDosen\UpdateMstDosenRequest;
    use App\Libraries\ServiceResult;
    
    interface IMstDosenService
    {
        public function Get(string $id);
        public function Create(CreateMstDosenRequest $request);
        public function Update(UpdateMstDosenRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>