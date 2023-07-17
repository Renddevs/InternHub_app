<?php
    namespace App\Libraries;
    class ServiceResult
    {
        public $code = 400;
        public $desc = "Bad Request";

        public function OK($desc="")
        {
            $this->code = 200;
            $this->desc = $desc;
        }

        public function Error($desc=""){
            $this->code = 500;
            $this->desc = $desc;
        }

        public function UnAuthorize($desc="")
        {
            $this->code = 401;
            $this->desc = $desc;
        }

        public function Notfound($desc=""){
            $this->code = 404;
            $this->desc = $desc;
        }

        public function Forbiden($desc=""){
            $this->code = 403;
            $this->desc = $desc;
        }

        public function Response(){
            return response()->json(["data" => $data, "status" => $this->status], $this->status->code);
        }
    }
?>