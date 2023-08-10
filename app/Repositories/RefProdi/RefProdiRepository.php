<?php
    namespace App\Repositories\RefProdi;
    use App\Models\RefProdi;
    use App\Object\RefProdi\CreateRefProdiRequest;
    use App\Object\RefProdi\RefProdiObject;
    use App\Object\RefProdi\UpdateRefProdiRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;
    use App\Repositories\RefRole\IRefRoleRepository;

    use Exception;

    class RefProdiRepository implements IRefProdiRepository
    {
        private $model;
        private $_refRoleRepository;

        public function __construct(RefProdi $model, IRefRoleRepository $_refRoleRepository)
        {
            $this->model = $model;
            $this->_refRoleRepository = $_refRoleRepository;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = null;
            try {
                $RefProdi = $this->model::find($id);
                if($RefProdi != null){
                    $data = $RefProdi->get()->map(fn($RefProdi) => $this->Mapper($RefProdi))->first();
                }
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error RefProdiRepository(Get)".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }

        public function Create(CreateRefProdiRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $RefProdi = new RefProdi;
                $RefProdi->prodi_name = $request->prodi_name;
                $RefProdi->tahun_ajaran = $request->tahun_ajaran;
                $RefProdi->create_by = "SYSTEM";
                $RefProdi->created_at = date("Y-m-d h:i:s");
                $RefProdi->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in RefProdiRepository(CreateRefProdi) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Update(UpdateRefProdiRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $refProdi = RefProdi::find($request->id);
                $refProdi->prodi_name = $request->prodi_name;
                $refProdi->tahun_ajaran = $request->tahun_ajaran;
                $refProdi->update_by = 'SYSTEM';
                $RefProdi->updated_at = date("Y-m-d h:i:s");
                $RefProdi->save();
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
                $RefProdi = RefProdi::find($request->id);
                $RefProdi->delete();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Mapper(RefProdi $model) : RefProdiObject
        {
            $RefProdi = new RefProdiObject();
            $RefProdi->id = $model->id;
            $RefProdi->prodi_name = $model->prodi_name;
            $RefProdi->tahun_ajaran = $model->tahun_ajaran;
            return $RefProdi;
        }
    }
?>