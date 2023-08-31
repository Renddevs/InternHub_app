<?php
    namespace App\Repositories\TrsPembayaranKp;
    use App\Models\TrsPembayaranKp;
    use App\Object\TrsPembayaranKp\CreateTrsPembayaranKpRequest;
    use App\Object\TrsPembayaranKp\TrsPembayaranKpObject;
    use App\Object\TrsPembayaranKp\UpdateTrsPembayaranKpRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;
    use App\Repositories\RefProdi\IRefProdiRepository;
    use App\Repositories\User\IUserRepository;

    use Exception;

    class TrsPembayaranKpRepository implements ITrsPembayaranKpRepository
    {
        private $model;

        public function __construct(TrsPembayaranKp $model)
        {
            $this->model = $model;
        }

        public function Create(CreateTrsPembayaranKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $data = new TrsPembayaranKp;
                $data->id = $request->id;
                $data->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
                $data->id_mst_mahasiswa = $request->id_mst_mahasiswa;
                $data->id_mst_media = $request->id_mst_media;
                $data->tgl_pengajuan = date("Y-m-d h:i:s");
                $data->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in TrsPembayaranKpRepository(CreateTrsPembayaranKp) : ".$ex->getMessage());
            }
            
            return $result;
        }
    }
?>