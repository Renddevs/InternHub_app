<?php
    namespace App\Repositories\MstMedia;
    use App\Libraries\ServiceResult;
    use App\Object\MstMedia\CreateMstMediaRequest;
    use App\Object\MstMedia\UpdateMstMediaRequest;

    interface IMstMediaRepository{
        public function Get(string $id);
        public function Create(CreateMstMediaRequest $request) : ServiceResult;
        public function Delete(string $id) : ServiceResult;
    }
?>