<?php
    namespace App\Services\User;

    use App\Helpers\FileHelper\IFileHelper;
    use App\Repositories\User\IUserRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;

    use Illuminate\Http\Request;

    
    class UserService implements IUserService
    {
        private $_userRepository;
        private $_fileHelper;

        function __construct(IUserRepository $_userRepository, IFileHelper $_fileHelper)
        {
            $this->_userRepository = $_userRepository;
            $this->_fileHelper = $_fileHelper;
        }

        public function GetListJSON()
        {
            $result = new DataServiceResult();
            try{
                $data = $this->_userRepository->GetList();
                $result->data = $data;
                $result->OK();

            }catch(Exception $ex){
                $result->Error($ex->getMessage());
            }
            return $result->Response();
        }

        public function UploadFile(Request $request){
            $result = new ServiceResult();
            try {
                $files = $request->file('files');
                return $this->_fileHelper->Upload($files);
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result->Response();
        }
    }
    

?>