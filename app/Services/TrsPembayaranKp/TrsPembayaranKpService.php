<?php
    namespace App\Services\TrsPembayaranKp;

    use App\Repositories\TrsPembayaranKp\ITrsPembayaranKpRepository;
    use App\Repositories\MstMedia\IMstMediaRepository;
    use App\Libraries\ServiceResult;
    use App\Object\TrsPembayaranKp\CreateTrsPembayaranKpRequest;
    use App\Object\TrsPembayaranKp\ApproveTrsPembayaranKpRequest;
    use App\Object\MstMedia\CreateMstMediaRequest;
    use Illuminate\Http\Request;    
    use Illuminate\Http\Response;
    use Validator;
    use DB;
    use Exception;    
    use Illuminate\Support\Str;
    class TrsPembayaranKpService implements ITrsPembayaranKpService
    {
        private $_trsPembayaranKpRepository;
        private $_mstMediaRepository;

        function __construct(ITrsPembayaranKpRepository $_trsPembayaranKpRepository, IMstMediaRepository $_mstMediaRepository)
        {
            $this->_trsPembayaranKpRepository = $_trsPembayaranKpRepository;
            $this->_mstMediaRepository = $_mstMediaRepository;
        }
        
        public function VPendaftaran(string $npm) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                //Sementara fungsi akan selalu menghasilkan FALSE
                $result->UnAcceptable("Mahasiswa bersangkutan tidak dapat melakukan Pembayaran");
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function UploadBPembayaran(Request $request) : ServiceResult {
            $result = new ServiceResult();
            try {
                $validator = Validator::make($request->all(), [
                    'bukti_pembayaran' => 'required|image:jpeg,png,jpg'
                ]);
                if($validator->fails()){
                    $result->BadRequest($validator->messages()->first());
                    return $result;
                }
                $image = $request->file('bukti_pembayaran');
                $folder = "asset/img/bukti_pembayaran";
                DB::beginTransaction();
                $file = new CreateMstMediaRequest();
                $file->id = Str::uuid();
                $file->name = "file";
                $file->original_name = $image->getClientOriginalName();
                $file->extension = $image->getClientOriginalExtension();
                $file->folder = $folder;
                $saveMedia = $this->_mstMediaRepository->Create($file);
                if($saveMedia->code != 200){
                    return $saveMedia;
                }
                $tPembayaran = new CreateTrsPembayaranKpRequest();
                $tPembayaran->id = Str::uuid();
                $tPembayaran->id_trs_pendaftaran_kp = $request->id_trs_pendaftaran_kp;
                $tPembayaran->id_mst_mahasiswa = $request->id_mst_mahasiswa;
                $tPembayaran->id_mst_media = $file->id;
                $savePembayaran = $this->_trsPembayaranKpRepository->Create($tPembayaran);
                if($savePembayaran->code != 200){
                    return $savePembayaran;
                }
                $image->store($folder, "public");
                DB::commit();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Approve(ApproveTrsPembayaranKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $approve = $this->_trsPembayaranKpRepository->Approve($request);
                return $approve;
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }
    }
?>