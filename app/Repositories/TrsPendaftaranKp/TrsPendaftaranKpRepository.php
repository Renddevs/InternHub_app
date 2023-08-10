<?php
    namespace App\Repositories\TrsPendaftaranKp;
    use App\Models\TrsPendaftaranKp;
    use App\Object\TrsPendaftaranKp\CreateTrsPendaftaranKpRequest;
    use App\Object\TrsPendaftaranKp\TrsPendaftaranKpObject;
    use App\Object\TrsPendaftaranKp\UpdateTrsPendaftaranKpRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;
    use App\Repositories\RefProdi\IRefProdiRepository;
    use App\Repositories\User\IUserRepository;

    use Exception;

    class TrsPendaftaranKpRepository implements ITrsPendaftaranKpRepository
    {
        private $model;

        public function __construct(TrsPendaftaranKp $model)
        {
            $this->model = $model;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = null;
            try {
                $TrsPendaftaranKp = $this->model::find($id);
                if($TrsPendaftaranKp != null){
                    $data = $TrsPendaftaranKp->get()->map(fn($TrsPendaftaranKp) => $this->Mapper($TrsPendaftaranKp))->first();
                }
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error TrsPendaftaranKpRepository(Get)".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }

        public function Create(CreateTrsPendaftaranKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $data = new TrsPendaftaranKp;
                $data->tahun = $request->tahun;
                $data->tgl_mulai = $request->tgl_mulai;
                $data->tgl_akhir = $request->tgl_akhir;
                $data->is_susulan = $request->is_susulan;
                $data->keterangan = $request->keterangan;
                $data->create_by = "SYSTEM";
                $data->created_at = date("Y-m-d h:i:s");
                $data->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in TrsPendaftaranKpRepository(CreateTrsPendaftaranKp) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Update(UpdateTrsPendaftaranKpRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $data = TrsPendaftaranKp::find($request->id);
                $data->tahun = $request->tahun;
                $data->tgl_mulai = $request->tgl_mulai;
                $data->tgl_akhir = $request->tgl_akhir;
                $data->is_susulan = $request->is_susulan;
                $data->keterangan = $request->keterangan;
                $data->update_by = "SYSTEM";
                $data->updated_at = date("Y-m-d h:i:s");
                $data->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = TrsPendaftaranKp::find($request->id);
                $user->delete();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Mapper(TrsPendaftaranKp $model) : TrsPendaftaranKpObject
        {
            $trsPendaftaranKp = new TrsPendaftaranKpObject();
            $trsPendaftaranKp->id = $model->id;
            $trsPendaftaranKp->tahun = $model->tahun;
            $trsPendaftaranKp->tgl_mulai = date("Y-m-d", $model->tgl_mulai);
            $trsPendaftaranKp->tgl_akhir = date("Y-m-d", $model->tgl_akhir);
            $trsPendaftaranKp->is_susulan = $model->is_susulan;
            $trsPendaftaranKp->keterangan = $model->keterangan;
            return $trsPendaftaranKp;
        }
    }
?>