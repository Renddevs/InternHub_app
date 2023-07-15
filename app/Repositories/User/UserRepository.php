<?php
    namespace App\Repositories\User;
    use App\Models\User;

    class UserRepository implements IUserRepository
    {
        private $model;

        public function __construct(User $model)
        {
            $this->model = $model;
        }

        public function GetList(){
            return $this->model->get();
        }


    }
?>