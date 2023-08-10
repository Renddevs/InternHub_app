<?php
    namespace App\Services\MstMahasiswa;

    use App\Repositories\MstMahasiswa\IMstMahasiswaRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;
    use App\Object\MstMahasiswa\CreateMstMahasiswaRequest;
    use App\Object\MstMahasiswa\UpdateMstMahasiswaRequest;
    use App\Object\MstMahasiswa\MstMahasiswaObject;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;


    use Exception;

    
    class MstMahasiswaService implements IMstMahasiswaService
    {
        private $_mstMahasiswaRepository;

        function __construct(IMstMahasiswaRepository $_mstMahasiswaRepository)
        {
            $this->_mstMahasiswaRepository = $_mstMahasiswaRepository;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = new MstMahasiswaObject();
            try {
                $mstMahasiswa = $this->_mstMahasiswaRepository->Get($id);
                return $mstMahasiswa;
            } catch (Exception $ex) {
                $result->Error("Error MstMahasiswaService(Get) ".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }
        
        public function Create(CreateMstMahasiswaRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_mstMahasiswaRepository->Create($request);
            } catch (Exception $ex) {
                $result->Error("Error in MstMahasiswaService(Create MstMahasiswa) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Update(UpdateMstMahasiswaRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_mstMahasiswaRepository->Update($request);
            } catch (Exception $ex) {
                $result->Error("Error in MstMahasiswaService(Update MstMahasiswa) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_mstMahasiswaRepository->Delete($id);
            } catch (Exception $ex) {
                $result->Error("Error in MstMahasiswaService(Delete MstMahasiswa) : ".$ex->getMessage());
            }
            return $result;
        }
    }
    

?>