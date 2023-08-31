<?php
    namespace App\Libraries;
    class ServiceResult
    {
        public $code = 400;
        public $desc = "Bad Request";

        public function BadRequest($desc="")
        {
            $this->code = 400;
            $this->desc = $desc;
        }

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

        public function Unprocessable($desc="")
        {
            $this->code = 422;
            $this->desc = $desc;
        }

        public function UnAcceptable($desc=""){
            $this->code = 406;
            $this->desc = $desc;
        }
    }
?>