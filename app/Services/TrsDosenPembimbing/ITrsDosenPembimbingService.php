<?php
    namespace App\Services\TrsDosenPembimbing;
    use Illuminate\Http\Request;
    use App\Object\TrsDosenPembimbing\CreateTrsDosenPembimbingRequest;
    use App\Libraries\ServiceResult;
    
    interface ITrsDosenPembimbingService
    {
        public function PDosenPembimbing(CreateTrsDosenPembimbingRequest $request);
    }
?>