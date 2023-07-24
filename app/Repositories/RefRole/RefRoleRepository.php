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
            $refRole = new RefRoleObject();
            try {
                $data = RefRole::where('id', $id)->first();
                if($data != null){
                    $refRole->id = $data->id;
                    $refRole->name = $data->name;
                    $refRole->is_active = $data->is_active;
                    $result->OK();
                }else{
                    $result->Notfound();
                }
            } catch (Exception $ex) {
                $result->Error("Error in RefRoleRepository(CreateRefRole) : ".$ex->getMessage());
            }
            
            return ["data" => $refRole, "status" => $result];
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
    }
?>