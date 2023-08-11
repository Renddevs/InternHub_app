<?php
    namespace App\Repositories\MstMedia;
    use App\Models\MstMedia;
    use App\Object\MstMedia\CreateMstMediaRequest;
    use App\Object\MstMedia\MstMediaObject;
    use App\Object\MstMedia\UpdateMstMediaRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;

    use Exception;

    class MstMediaRepository implements IMstMediaRepository
    {
        private $model;

        public function __construct(MstMedia $model)
        {
            $this->model = $model;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = null;
            try {
                $mstMedia = $this->model::find($id);
                if($mstMedia != null){
                    $data = $mstMedia->get()->map(fn($mstMedia) => $this->Mapper($mstMedia))->first();
                }
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error MstMediaRepository(Get)".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }

        public function Create(CreateMstMediaRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = new MstMedia;
                $user->name = $request->name;
                $user->original_name = $request->original_name;
                $user->extension = $request->extension;
                $user->folder = $request->folder;
                $user->create_by = "SYSTEM";
                $user->created_at = date("Y-m-d h:i:s");
                $user->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in MstMediaRepository(CreateMstMedia) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = MstMedia::find($request->id);
                $user->delete();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Mapper(MstMedia $model) : MstMediaObject
        {
            $mstMedia = new MstMediaObject();
            $mstMedia->id = $model->id;
            $mstMedia->name = $model->name;
            $mstMedia->original_name = $model->original_name;
            $mstMedia->extension = $model->extension;
            $mstMedia->folder = $model->folder;
            return $mstMedia;
        }
    }
?>