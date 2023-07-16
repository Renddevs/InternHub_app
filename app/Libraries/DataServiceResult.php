<?php
    namespace App\Libraries;
    
    class DataServiceResult
    {
        public $data;
        public $status;

        public function __construct(){
            $this->status = new ServiceResult();
        }

        public function OK($data, $desc="")
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
    }
?>