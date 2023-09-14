<?php
    namespace App\Repositories\TrsBimbinganKp;
    use App\Models\TrsBimbinganKp;
    use App\Object\TrsBimbinganKp\CreateTrsBimbinganKpRequest;
    use App\Object\TrsBimbinganKp\ApproveTrsBimbinganKpRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;

    use Exception;

    class TrsBimbinganKpRepository implements ITrsBimbinganKpRepository
    {
        private $model;

        public function __construct(TrsBimbinganKp $model)
        {
            $this->model = $model;
        }

        public function Create(CreateTrsBimbinganKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $data = new TrsBimbinganKp;
                $data->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
                $data->id_mst_mahasiswa = $request->id_mst_mahasiswa;
                $data->id_mst_dosen = $request->id_mst_dosen;
                $data->topik_bimbingan = $request->topik_bimbingan;
                $data->is_verif = false;
                $data->tgl_bimbingan = date("Y-m-d h:i:s");
                $data->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in TrsBimbinganKpRepository(CreateTrsBimbinganKp) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Approve(ApproveTrsBimbinganKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $data = TrsBimbinganKp::find($request->id_trs_bimbingan_kp);
                $data->is_verif = true;
                $data->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in TrsBimbinganKpRepository(ApproveTrsBimbinganKp) : ".$ex->getMessage());
            }
            
            return $result;
        }
    }
?>