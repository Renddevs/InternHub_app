<?php
    namespace App\Services\TrsUploadLaporan;

    use App\Repositories\TrsUploadLaporan\ITrsUploadLaporanRepository;
    use App\Repositories\MstMedia\IMstMediaRepository;
    use App\Libraries\ServiceResult;
    use App\Object\TrsUploadLaporan\CreateTrsUploadLaporanRequest;
    use App\Object\TrsUploadLaporan\ApproveTrsUploadLaporanRequest;
    use App\Object\MstMedia\CreateMstMediaRequest;
    use Illuminate\Http\Request;    
    use Illuminate\Http\Response;
    use Validator;
    use DB;
    use Exception;    
    use Illuminate\Support\Str;
    class TrsUploadLaporanService implements ITrsUploadLaporanService
    {
        private $_trsUploadLaporanRepository;
        private $_mstMediaRepository;

        function __construct(ITrsUploadLaporanRepository $_trsUploadLaporanRepository, IMstMediaRepository $_mstMediaRepository)
        {
            $this->_trsUploadLaporanRepository = $_trsUploadLaporanRepository;
            $this->_mstMediaRepository = $_mstMediaRepository;
        }

        public function UploadLaporan(Request $request) : ServiceResult {
            $result = new ServiceResult();
            try {
                $validator = Validator::make($request->all(), [
                    'bukti_pembayaran' => 'required|image:jpeg,png,jpg'
                ]);
                if($validator->fails()){
                    $result->BadRequest($validator->messages()->first());
                    return $result;
                }
                $image = $request->file('laporan');
                $folder = "asset/img/bukti_pembayaran";
                DB::beginTransaction();
                $file = new CreateMstMediaRequest();
                $file->id = Str::uuid();
                $file->name = "file_laporan";
                $file->original_name = $image->getClientOriginalName();
                $file->extension = $image->getClientOriginalExtension();
                $file->folder = $folder;
                $saveMedia = $this->_mstMediaRepository->Create($file);
                if($saveMedia->code != 200){
                    return $saveMedia;
                }
                $tUpload = new CreateTrsUploadLaporanRequest();
                $tUpload->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
                $tUpload->id_mst_mahasiswa = $request->id_mst_mahasiswa;
                $tUpload->id_mst_media = $file->id;
                $saveLaporan = $this->_trsUploadLaporanRepository->Create($tUpload);
                if($saveLaporan->code != 200){
                    return $saveLaporan;
                }
                $image->store($folder, "public");
                DB::commit();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Approve(ApproveTrsUploadLaporanRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $approve = $this->_trsUploadLaporanRepository->Approve($request);
                return $approve;
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }
    }
?>