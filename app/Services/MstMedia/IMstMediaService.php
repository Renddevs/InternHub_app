<?php
    namespace App\Services\MstMedia;
    use Illuminate\Http\Request;
    use App\Object\MstMedia\CreateMstMediaRequest;
    use App\Object\MstMedia\UpdateMstMediaRequest;
    use App\Libraries\ServiceResult;
    
    interface IMstMediaService
    {
        public function Get(string $id);
        public function Create(CreateMstMediaRequest $request);
        public function Delete(string $id) : ServiceResult;
    }
?>