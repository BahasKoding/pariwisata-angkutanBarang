<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Staff;
use App\Models\School;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User
        $user = [
            [
                'staff_id' => 1,
                'username' => 'admin',
                'name' => 'Budi',
                'password' =>bcrypt('123'),
                'role'=> 'admin'
            ],
            [
                'staff_id' => 2,
                'username' => 'penjaga',
                'name' => 'Jajang',
                'password' =>bcrypt('123'),
                'role'=> 'penjaga'
            ]
        ];

        foreach($user as $key => $value) {
            Staff::where('id',1)->update(['signed' => 2]);
            Staff::where('id',2)->update(['signed' => 2]);
            User::create($value);
        }    
            
        // Tabel Sekolah
        School::create([
            'nama' => 'SMK NEGERI 1 Cibinong',
            'alamat' => 'Jl. Karadenan No.7, Karadenan, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16111',
            'kota' => 'Kabupaten Bogor',
            'kode_pos' => '16111',
            'email' => 'admin@smkn1cibinong.sch.id',
            'website' => 'https://smkn1cibinong.sch.id/',
            'fax' => '622518665558',
            'nomor_telepon' => '622518663846'
        ]);
    }
}