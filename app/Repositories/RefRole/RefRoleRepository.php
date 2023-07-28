<?php
    namespace App\Repositories\RefRole;
    use App\Models\RefRole;
    use App\Object\RefRole\CreateRefRoleRequest;
    use App\Object\RefRole\UpdateRefRoleRequest;
    use App\Object\RefRole\RefRoleObject;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;

    use Exception;

    class RefRoleRepository implements IRefRoleRepository
    {
        private $model;

        public function __construct(RefRole $model)
        {
            $this->model = $model;
        }

        public function Create(CreateRefRoleRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $refRole = new RefRole;
                $refRole->name = $request->name;
                $refRole->is_active = $request->is_active;
                $refRole->create_by = "SYSTEM";
                $refRole->created_at = date("Y-m-d h:i:s");
                $refRole->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in RefRoleRepository(CreateRefRole) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Get(string $id) : mixed
        {
            $result = new ServiceResult();
            $data = null;
            try {
                $refRole = $this->model::find($id);
                if($refRole != null){
                    $data = $this->model::find($id)->get()->map(fn($role) => $this->Mapper($role))->first();
                    $result->OK();
                }else{
                    $result->Notfound();
                }
            } catch (Exception $ex) {
                $result->Error("Error in RefRoleRepository(CreateRefRole) : ".$ex->getMessage());
            }
            
            return ["data" => $data, "status" => $result];
        }

        public function GetList(string $name = "", bool $is_active){
            $result = new ServiceResult();
            $data = null;
            try {
                $refRole = $this->model;
                if($name != null && $name != ""){
                    $refRole = $refRole->where('name', 'like', '%'.$name.'%');
                }
                $refRole = $refRole->where('is_active', $is_active);
                $data = $refRole->get()->map(fn($refRole) => $this->Mapper($refRole));
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return ["data" => $data, "status" => $result]; 
        }

        public function Update(UpdateRefRoleRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $refRole = RefRole::find($request->id);
                $refRole->name = $request->name;
                $refRole->is_active = $request->is_active;
                $refRole->update_by = "SYSTEM";
                $refRole->updated_at = date("Y-m-d h:i:s");
                $refRole->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in RefRoleRepository(UpdateRefRole) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Delete(string $id) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $refRole = RefRole::find($id);
                $refRole->delete();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in RefRoleRepository(DeleteRefRole) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Mapper(RefRole $model) : RefRoleObject
        {
            $data = new RefRoleObject();
            $data->id = $model->id;
            $data->name = $model->name;
            $data->is_active = $model->is_active;
            return $data;
        }
    }
?>