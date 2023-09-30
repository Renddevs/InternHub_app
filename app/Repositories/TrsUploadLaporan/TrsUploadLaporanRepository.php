<?php
    namespace App\Repositories\TrsUploadLaporan;
    use App\Models\TrsUploadLaporan;
    use App\Object\TrsUploadLaporan\CreateTrsUploadLaporanRequest;
    use App\Object\TrsUploadLaporan\ApproveTrsUploadLaporanRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;
    use App\Repositories\TrsUploadLaporan\ITrsUploadLaporanRepository;

    use Exception;

    use Illuminate\Support\Str;
    

    class TrsUploadLaporanRepository implements ITrsUploadLaporanRepository
    {
        private $model;

        public function __construct(TrsUploadLaporan $model)
        {
            $this->model = $model;
        }
        
        public function Create(CreateTrsUploadLaporanRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $data = new TrsUploadLaporan;
                $data->id = Str::uuid();
                $data->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
                $data->id_mst_mahasiswa = $request->id_mst_mahasiswa;
                $data->id_mst_media = $request->id_mst_media;
                $data->is_approve = false;
                $data->tgl_pengajuan = date("Y-m-d h:i:s");
                $data->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in TrsUploadLaporanRepository(CreateTrsUploadLaporan) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Approve(ApproveTrsUploadLaporanRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $trsPembayaran = TrsUploadLaporan::find($request->id);
                $trsPembayaran->is_approve = $request->is_approve;
                $trsPembayaran->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in TrsUploadLaporanRepository(ApproveTrsUploadLaporan) : ".$ex->getMessage());
            }
            return $result;
        }
    }
?>