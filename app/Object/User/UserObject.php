<?php
    namespace App\Object\User;
    use App\Object\RefRole\RefRoleObject;

    class UserObject
    {
        public string $id;
        public RefRoleObject $role;
        public string $username;
    }
?>