<?php
    namespace App\Repositories\MstMahasiswa;
    use App\Models\MstMahasiswa;
    use App\Object\MstMahasiswa\CreateMstMahasiswaRequest;
    use App\Object\MstMahasiswa\MstMahasiswaObject;
    use App\Object\MstMahasiswa\UpdateMstMahasiswaRequest;
    use App\Libraries\ServiceResult;
    use Illuminate\Http\Response;
    use App\Repositories\RefProdi\IRefProdiRepository;
    use App\Repositories\User\IUserRepository;

    use Exception;

    class MstMahasiswaRepository implements IMstMahasiswaRepository
    {
        private $model;
        private $_userRepository;
        private $_refProdiRepository;

        public function __construct(MstMahasiswa $model, IUserRepository $_userRepository, IRefProdiRepository $_refProdiRepository)
        {
            $this->model = $model;
            $this->_userRepository = $_userRepository;
            $this->_refProdiRepository = $_refProdiRepository;
        }

        public function Get(string $id){
            $result = new ServiceResult();
            $data = null;
            try {
                $mstMahasiswa = $this->model::find($id);
                if($mstMahasiswa != null){
                    $data = $mstMahasiswa->get()->map(fn($mstMahasiswa) => $this->Mapper($mstMahasiswa))->first();
                }
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error MstMahasiswaRepository(Get)".$ex->getMessage());
            }
            return ["data" => $data, "status" => $result];
        }

        public function Create(CreateMstMahasiswaRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = new MstMahasiswa;
                $user->id_user = $request->id_user;
                $user->id_ref_prodi = $request->id_ref_prodi;
                $user->npm = $request->npm;
                $user->firstname = $request->firstname;
                $user->lastname = $request->lastname;
                $user->create_by = "SYSTEM";
                $user->created_at = date("Y-m-d h:i:s");
                $user->save();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error("Error in MstMahasiswaRepository(CreateMstMahasiswa) : ".$ex->getMessage());
            }
            
            return $result;
        }

        public function Update(UpdateMstMahasiswaRequest $request) : ServiceResult
        {
            $result = new ServiceResult();
            try {
                $user = MstMahasiswa::find($request->id);
                $user->id_ref_prodi = $request->id_ref_prodi;
                $user->npm = $request->npm;
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
                $user = MstMahasiswa::find($request->id);
                $user->delete();
                $result->OK();
            } catch (Exception $ex) {
                $result->Error($ex->getMessage());
            }
            return $result;
        }

        public function Mapper(MstMahasiswa $model) : MstMahasiswaObject
        {
            $mstMahasiswa = new MstMahasiswaObject();
            $mstMahasiswa->id = $model->id;
            $mstMahasiswa->UserObject = $this->_userRepository->Mapper($model->user);
            $mstMahasiswa->RefProdiObject = $this->_refProdiRepository->Mapper($model->refProdi);   
            $mstMahasiswa->npm = $model->npm;
            $mstMahasiswa->firstname = $model->firstname;
            $mstMahasiswa->lastname = $model->lastname;
            return $mstMahasiswa;
        }
    }
?>