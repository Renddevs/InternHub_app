<?php
    namespace App\Repositories\TrsDosenPembimbing;
    use App\Libraries\ServiceResult;
    use App\Object\TrsDosenPembimbing\CreateTrsDosenPembimbingRequest;

    interface ITrsDosenPembimbingRepository{
        public function Create(CreateTrsDosenPembimbingRequest $request);
    }
?>