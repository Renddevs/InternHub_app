<?php
    namespace App\Repositories\TrsDosenPembimbing;
    use App\Models\TrsDosenPembimbing;
    use App\Object\TrsDosenPembimbing\CreateTrsDosenPembimbingRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;

    use Exception;

    class TrsDosenPembimbingRepository implements ITrsDosenPembimbingRepository
    {
        private $model;

        public function __construct(TrsDosenPembimbing $model)
        {
            $this->model = $model;
        }

        public function Create(CreateTrsDosenPembimbingRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $data = new TrsDosenPembimbing;
                $data->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
                $data->id_mst_mahasiswa = $request->id_mst_mahasiswa;
                $data->id_mst_dosen = $request->id_mst_dosen;
                $data->create_by = "SYSTEM";
                $data->created_date = date("Y-m-d h:i:s");
                $data->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in TrsDosenPembimbingRepository(CreateTrsDosenPembimbing) : ".$ex->getMessage());
            }
            
            return $result;
        }
    }
?>