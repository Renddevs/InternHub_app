<?php
    namespace App\Repositories\TrsPendaftaranKp;
    use App\Libraries\ServiceResult;
    use App\Object\TrsPendaftaranKp\CreateTrsPendaftaranKpRequest;
    use App\Object\TrsPendaftaranKp\UpdateTrsPendaftaranKpRequest;

    interface ITrsPendaftaranKpRepository{
        public function Get(string $id);
        public function Create(CreateTrsPendaftaranKpRequest $request) : ServiceResult;
        public function Update(UpdateTrsPendaftaranKpRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>