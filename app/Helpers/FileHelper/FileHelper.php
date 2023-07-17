<?php
    namespace App\Helpers\FileHelper;
    use App\Libraries\ServiceResult;

    class FileHelper implements IFileHelper{
        private $allowedfileExtension=['pdf','jpg','png'];

        public function Upload($files){
            $result = new ServiceResult();
            try {
                $extension = $files->getClientOriginalExtension();
                if(!in_array($extension, $this->allowedfileExtension)){
                    $result->Unprocessable('Invalid File Format');
                    return $result->Response();
                }
                $files->move(public_path().'/asset/img/bukti_pembayaran', $files->getClientOriginalName());
                $result->OK();

            } catch (Exception $ex) {
                $result->Error($ex->getMessage);
            }
            return $result->Response();
        }
    }
?>