<?php
    namespace App\Libraries;
    
    class DataServiceResult
    {
        public $data;
        public $status;

        public function __construct(){
            $this->status = new ServiceResult();
        }

        public function OK($desc="")
        {
            $this->status->OK($desc);
        }

        public function Notfound($desc="")
        {
            $this->status->NotFound($desc);
        }

        public function Error($desc="")
        {
            $this->status->Error();
        }

        public function Response(){
            return response()->json(["data"=> $this->data, "status" => $this->status], $this->status->code);
        }
    }
?>