<?php
    namespace App\Services\TrsPendaftaranKp;

    use App\Repositories\TrsPendaftaranKp\ITrsPendaftaranKpRepository;
    use App\Libraries\ServiceResult;
    use App\Libraries\DataServiceResult;
    use App\Object\TrsPendaftaranKp\CreateTrsPendaftaranKpRequest;
    use App\Object\TrsPendaftaranKp\UpdateTrsPendaftaranKpRequest;
    use App\Object\TrsPendaftaranKp\TrsPendaftaranKpObject;
    use Illuminate\Http\Request;    
    use Illuminate\Http\Response;


    use Exception;

    
    class TrsPendaftaranKpService implements ITrsPendaftaranKpService
    {
        private $_trsPendaftaranKpRepository;

        function __construct(ITrsPendaftaranKpRepository $_trsPendaftaranKpRepository)
        {
            $this->_trsPendaftaranKpRepository = $_trsPendaftaranKpRepository;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = new TrsPendaftaranKpObject();
            try {
                $TrsPendaftaranKp = $this->_trsPendaftaranKpRepository->Get($id);
                return $TrsPendaftaranKp;
            } catch (Exception $ex) {
                $result->Error("Error TrsPendaftaranKpService(Get) ".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }
        
        public function Create(CreateTrsPendaftaranKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_trsPendaftaranKpRepository->Create($request);
            } catch (Exception $ex) {
                $result->Error("Error in TrsPendaftaranKpService(Create TrsPendaftaranKp) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Update(UpdateTrsPendaftaranKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_trsPendaftaranKpRepository->Update($request);
            } catch (Exception $ex) {
                $result->Error("Error in TrsPendaftaranKpService(Update TrsPendaftaranKp) : ".$ex->getMessage());
            }
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $result = $this->_trsPendaftaranKpRepository->Delete($id);
            } catch (Exception $ex) {
                $result->Error("Error in TrsPendaftaranKpService(Delete TrsPendaftaranKp) : ".$ex->getMessage());
            }
            return $result;
        }
        
        public function VPendaftaran(string $npm) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                //Sementara fungsi akan selalu menghasilkan TRUE
                $result->OK("Mahasiswa bersangkutan dapat melakukan pendaftaran");
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }
    }
    

?>