<?php
    namespace App\Repositories\MstDosen;
    use App\Models\MstDosen;
    use App\Object\User\CreateMstDosenRequest;
    use App\Object\User\MstDosenObject;
    use App\Object\User\UpdateMstDosenRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;
    use App\Repositories\RefProdi\IRefProdiRepository;
    use App\Repositories\User\IRefUserRepository;

    use Exception;

    class MstDosenRepository implements IMstDosenRepository
    {
        private $model;
        private $_userRepository;
        private $_refProdiRepository;

        public function __construct(MstDosen $model, IUserRepository $_userRepository, IRefProdiRepository $_refProdiRepository)
        {
            $this->model = $model;
            $this->_userRepository = $_userRepository;
            $this->_refRoleRepository = $_refRoleRepository;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = null;
            try {
                $mstDosen = $this->model::find($id);
                if($mstDosen != null){
                    $data = $mstDosen->get()->map(fn($mstDosen) => $this->Mapper($mstDosen))->first();
                }
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error MstDosenRepository(Get)".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }

        public function Create(CreateMstDosenRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = new MstDosen;
                $user->id_user = $request->id_user;
                $user->id_ref_prodi = $request->id_ref_prodi;
                $user->firstname = $request->firstname;
                $user->lastname = $request->lastname;
                $user->create_by = "SYSTEM";
                $user->created_at = date("Y-m-d h:i:s");
                $user->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in MstDosenRepository(CreateMstDosen) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Update(UpdateMstDosenRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = MstDosen::find($request->id);
                $user->id_ref_prodi = $request->id_ref_prodi;
                $user->firstname = $request->firstname;
                $user->lastname = $request->lastname;
                $user->update_by = "SYSTEM";
                $user->updated_at = date("Y-m-d h:i:s");
                $user->save();
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
                $user = MstDosen::find($request->id);
                $user->delete();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Mapper(MstDosen $model) : MstDosenObject
        {
            $mstDosen = new MstDosenObject();
            $mstDosen->id = $model->id;
            $mstDosen->UserObject = $this->_userRepository->Mapper($model->user);
            $mstDosen->RefProdiObject = $this->_refProdiRepository->Mapper($model->refProdi);   
            $mstDosen->firstname = $model->firstname;
            $mstDosen->lastname = $model->lastname;
            return $mstDosen;
        }
    }
?>