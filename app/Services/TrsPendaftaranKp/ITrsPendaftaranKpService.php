<?php
    namespace App\Services\TrsPendaftaranKp;
    use Illuminate\Http\Request;
    use App\Object\TrsPendaftaranKp\CreateTrsPendaftaranKpRequest;
    use App\Object\TrsPendaftaranKp\UpdateTrsPendaftaranKpRequest;
    use App\Libraries\ServiceResult;
    
    interface ITrsPendaftaranKpService
    {
        public function Get(string $id);
        public function Create(CreateTrsPendaftaranKpRequest $request);
        public function Update(UpdateTrsPendaftaranKpRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
        public function VPendaftaran(string $npm) : ServiceResult;
    }
?>