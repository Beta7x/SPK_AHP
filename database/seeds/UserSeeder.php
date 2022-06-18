<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // ADMIN ROLE
        User::create([
            'nisn' => "0",
            'nama' => "Admin SPK 1",
            'username' => "admin1",
            'password' => bcrypt('admin123'),
            'jabatan' => User::TIM_SPK_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);

        User::create([
            'nisn' => "1",
            'nama' => "Admin SPK 2",
            'username' => "admin",
            'password' => bcrypt('admin'),
            'jabatan' => User::TIM_SPK_ROLE,
            'jenis_kelamin' => User::FEMALE_TYPE,
        ]);

        // SPK ROLE
        User::create([
            'nisn' => "198507232005022001",
            'nama' => "Lilik Setyoharyanti",
            'username' => "lilik",
            'password' => bcrypt('123'),
            'jabatan' =>  User::TIM_SPK_ROLE,
            'jenis_kelamin' => User::FEMALE_TYPE,
        ]);

        User::create([
            'nisn' => "198807232005022002",
            'nama' => "Nurvi Asiati",
            'username' => "nurviasi",
            'password' => bcrypt('123'),
            'jabatan' =>  User::TIM_SPK_ROLE,
            'jenis_kelamin' => User::FEMALE_TYPE,
        ]);
        User::create([
            'nisn' => "199008262005021003",
            'nama' => "Agus Hendrawan",
            'username' => "agus",
            'password' => bcrypt('123'),
            'jabatan' =>  User::TIM_SPK_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "198906242005021004",
            'nama' => "Pramudiyono",
            'username' => "pramudiyono",
            'password' => bcrypt('123'),
            'jabatan' =>  User::TIM_SPK_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "199006282005022005",
            'nama' => "Suyetty",
            'username' => "suyetty",
            'password' => bcrypt('123'),
            'jabatan' =>  User::TIM_SPK_ROLE,
            'jenis_kelamin' => User::FEMALE_TYPE,
        ]);

        // SISWA ROLE 
        User::create([
            'nisn' => "0084604092",
            'nama' => "Yuwono",
            'username' => "yuwono",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "0084604091",
            'nama' => "Juherlan Miftachul Anam",
            'username' => "juerlanmif",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "0011501032",
            'nama' => "Putri Priyatin",
            'username' => "putripri",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::FEMALE_TYPE,
        ]);
        User::create([
            'nisn' => "0065604098",
            'nama' => "Atiena Sudwiharmi Pertiwi",
            'username' => "atienasp",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::FEMALE_TYPE,
        ]);
        User::create([
            'nisn' => "0053603002",
            'nama' => "Yunita Andriani",
            'username' => "yunitaand",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::FEMALE_TYPE,
        ]);
        User::create([
            'nisn' => "0034602001",
            'nama' => "Purnama Hadi Setiawan",
            'username' => "purhadiset",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "0035702003",
            'nama' => "Sandika Galih",
            'username' => "sandi",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "0024702000",
            'nama' => "Rangga Bintang Rhamadan",
            'username' => "ranggabr",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "0021802001",
            'nama' => "Slamet Sutresno",
            'username' => "slametsut",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "0012902000",
            'nama' => "Rakhmi Kuspriyantini",
            'username' => "rakhmikus",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::FEMALE_TYPE,
        ]);
        User::create([
            'nisn' => "0011502001",
            'nama' => "Sri Rahayu Utami",
            'username' => "srirahayu",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::FEMALE_TYPE,
        ]);
        User::create([
            'nisn' => "0010302002",
            'nama' => "Syarif Hidayatullah",
            'username' => "syarifhid",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "0013502001",
            'nama' => "Ridho A'zima",
            'username' => "ridhoa",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "0022702002",
            'nama' => "Raihan Ibrahim Saputro",
            'username' => "raihanibr",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
        User::create([
            'nisn' => "0023302002",
            'nama' => "Apria Sri Rohani",
            'username' => "apriasria",
            'password' => bcrypt('123'),
            'jabatan' =>  User::SISWA_ROLE,
            'jenis_kelamin' => User::MALE_TYPE,
        ]);
    }
}
