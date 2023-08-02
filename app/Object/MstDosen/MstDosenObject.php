<?php
    namespace App\Object\MstDosen;
    use App\Object\User\RefRoleObject;
    use App\Object\RefProdi\RefProdiObject;

    class MstDosenObject
    {
        public string $id;
        public UserObject $userObject;
        public RefProdiObject $refProdiObject;
        public string $firstname;
        public string $lastname;
    }
?>