<?php
    namespace App\Helpers\FileHelper;
    use App\Libraries\ServiceResult;

    class FileHelper implements IFileHelper{
        private $allowedfileExtension=['pdf','jpg','png'];

        public function Upload($files){
            $result = new ServiceResult();
            try {
                foreach($files as $mediaFiles) {
                    $extension = $mediaFiles->getClientOriginalExtension();
         
                    if(in_array($extension, $this->allowedfileExtension)){
                        $result->Unprocessable('Invalid File Format');
                        return $result->Response();
                    }
                    $mediaFiles->store('public/asset/img/bukti_pembayaran');
                }
                $result->OK();
                return $result->Response();

            } catch (Exception $ex) {
                $result->Error($ex->getMessage);
                return $result->Response();
            }
        }
    }
?>