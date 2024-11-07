<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        siswa::query()->delete();

        $siswas = [
            ['id' => 'S001', 'nama_siswa' => 'Ahmad', 'kelas' => 'XII RPL 1', 'NIS' => '1234567890', 'tanggal_lahir' => '2004-01-01', 'alamat' => 'Jl. Merdeka No. 3', 'no_hp' => '081234567890', 'email' => 'ahmad@g.com'],
            ['id' => 'S002', 'nama_siswa' => 'Bayu', 'kelas' => 'XI TKJ 2', 'NIS' => '9876543210', 'tanggal_lahir' => '2005-05-15', 'alamat' => 'Jl. Kebon No. 14', 'no_hp' => '089876543210', 'email' => 'bayu@example.com'],
            ['id' => 'S003', 'nama_siswa' => 'Cahaya', 'kelas' => 'X MM 1', 'NIS' => '1029384756', 'tanggal_lahir' => '2006-02-20', 'alamat' => 'Jl. Kenari No. 6', 'no_hp' => '08574839201', 'email' => 'cahaya@example.com'],
            ['id' => 'S004', 'nama_siswa' => 'Dian', 'kelas' => 'XII RPL 2', 'NIS' => '2938475610', 'tanggal_lahir' => '2004-08-03', 'alamat' => 'Jl. Cempaka No. 11', 'no_hp' => '08182736455', 'email' => 'dian@example.com'],
            ['id' => 'S005', 'nama_siswa' => 'Endah', 'kelas' => 'XI TKJ 1', 'NIS' => '3847561029', 'tanggal_lahir' => '2005-11-11', 'alamat' => 'Jl. Flamboyan No. 22', 'no_hp' => '08765432109', 'email' => 'endah@example.com'],
            ['id' => 'S006', 'nama_siswa' => 'Farid', 'kelas' => 'XII RPL 3', 'NIS' => '5647382910', 'tanggal_lahir' => '2004-07-21', 'alamat' => 'Jl. Bungur No. 4', 'no_hp' => '081234567891', 'email' => 'farid@example.com'],
            ['id' => 'S007', 'nama_siswa' => 'Gilang', 'kelas' => 'XI TKJ 3', 'NIS' => '1928374650', 'tanggal_lahir' => '2005-03-14', 'alamat' => 'Jl. Mawar No. 15', 'no_hp' => '089876543211', 'email' => 'gilang@example.com'],
        ];

        foreach ($siswas as $siswa) {
            siswa::create($siswa);
        }
    }
}