<?php
    namespace App\Object\MstMahasiswa;
    use App\Object\User\RefRoleObject;
    use App\Object\RefProdi\RefProdiObject;

    class MstMahasiswaObject
    {
        public string $id;
        public UserObject $userObject;
        public RefProdiObject $refProdiObject;
        public string $npm;
        public string $firstname;
        public string $lastname;
    }
?>