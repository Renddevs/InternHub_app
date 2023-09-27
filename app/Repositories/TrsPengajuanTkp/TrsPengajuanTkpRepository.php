<?php
    namespace App\Repositories\TrsPengajuanTkp;
    use App\Models\TrsPengajuanTkp;
    use App\Object\TrsPengajuanTkp\CreateTrsPengajuanTkpRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;
    use App\Repositories\TrsPengajuanTkp\ITrsPengajuanTkpRepository;

    use Exception;

    class TrsPengajuanTkpRepository implements ITrsPengajuanTkpRepository
    {
        private $model;

        public function __construct(TrsPengajuanTkp $model)
        {
            $this->model = $model;
        }

        public function Create(CreateTrsPengajuanTkpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $data = new TrsPengajuanTkp;
                $data->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
                $data->id_mst_mahasiswa = $request->id_mst_mahasiswa;
                $data->nama_perusahaan = $request->nama_perusahaan;
                $data->nama_penanggung_jawab = $request->nama_penanggung_jawab;
                $data->email_perusahaan = $request->email_perusahaan;
                $data->noHp_penanggung_jawab = $request->noHp_penanggung_jawab;
                $data->keterangan = $request->keterangan;
                $data->tgl_pengajuan = date("Y-m-d h:i:s");
                $data->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in TrsPengajuanTkpRepository(CreateTrsPengajuanTkp) : ".$ex->getMessage());
            }
            
            return $result;
        }
    }
?>