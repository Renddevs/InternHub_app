<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $id_ref_prodi = Str::uuid();
        DB::table('ref_prodi')->insert([
            'id' => $id_ref_prodi,
            'prodi_name' => "Informatika",
            'tahun_ajaran' => 2019,
            'create_by' => "SYSTEM",
            'created_at' => date("Y-m-d h:i:s")
        ]);

        $id_ref_role_admin = Str::uuid();
        DB::table('ref_role')->insert([
            'id' => $id_ref_role_admin,
            'name' => "Admin",
            'is_active' => 1,
            'create_by' => "SYSTEM",
            'created_at' => date("Y-m-d h:i:s")
        ]);

        $id_ref_role_dosen = Str::uuid();
        DB::table('ref_role')->insert([
            'id' => $id_ref_role_dosen,
            'name' => "Dosen",
            'is_active' => 1,
            'create_by' => "SYSTEM",
            'created_at' => date("Y-m-d h:i:s")
        ]);

        $id_ref_role_dosen = Str::uuid();
        DB::table('ref_role')->insert([
            'id' => $id_ref_role_dosen,
            'name' => "Mahasiswa",
            'is_active' => 1,
            'create_by' => "SYSTEM",
            'created_at' => date("Y-m-d h:i:s")
        ]);

        $id_user_admin = Str::uuid();
        DB::table('user')->insert([
            'id' => $id_user_admin,
            'id_role' => $id_ref_role_admin,
            'username' => "admin",
            'password' => "admin",
            'create_by' => "SYSTEM",
            'created_at' => date("Y-m-d h:i:s")
        ]);

        $id_user_dosen = Str::uuid();
        DB::table('user')->insert([
            'id' => $id_user_dosen,
            'id_role' => $id_ref_role_dosen,
            'username' => "gemadosen",
            'password' => "dosen123",
            'create_by' => "SYSTEM",
            'created_at' => date("Y-m-d h:i:s")
        ]);

        $id_user_mahasiswa = Str::uuid();
        DB::table('user')->insert([
            'id' => $id_user_mahasiswa,
            'id_role' => $id_ref_role_mahasiswa,
            'username' => "rendyStudent",
            'password' => "maha123",
            'create_by' => "SYSTEM",
            'created_at' => date("Y-m-d h:i:s")
        ]);

        $id_mst_dosen = Str::uuid();
        DB::table('mst_dosen')->insert([
            'id' => $id_mst_dosen,
            'id_user' => $id_user_dosen,
            'id_ref_prodi' => $id_ref_prodi,
            'firstname' => "Gema",
            'lastname' => "Dodi",
            'create_by' => "SYSTEM",
            'created_at' => date("Y-m-d h:i:s")
        ]);

        $id_mst_mahasiswa = Str::uuid();
        DB::table('mst_mahasiswa')->insert([
            'id' => $id_mst_mahasiswa,
            'id_user' => $id_user_dosen,
            'id_ref_prodi' => $id_ref_prodi,
            'npm' => "19111037",
            'firstname' => "Rendy",
            'lastname' => "Praseptya Nugraha",
            'create_by' => "SYSTEM",
            'created_at' => date("Y-m-d h:i:s")
        ]);

        
        
    }
}
