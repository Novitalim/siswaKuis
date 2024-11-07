<?php

namespace Database\Seeders;

use App\Models\eskul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class eskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        eskul::query()->delete();

        $eskuls = [
            ['id' => 'E001', 'nama_eskul' => 'Pramuka', 'pembina' => 'Ahmad', 'jadwal' => 'Senin 13:00-15:00', 'ruangan' => 'Aula Utama', 'kuota' => '30', 'deskripsi' => 'Pramuka adalah ekstrakurikuler yang mengembangkan keterampilan dan kedisiplinan dalam kepramukaan'],
            ['id' => 'E002', 'nama_eskul' => 'Volly', 'pembina' => 'Bagus', 'jadwal' => 'Selasa 14:00-16:00', 'ruangan' => 'Lapangan Volly', 'kuota' => '20', 'deskripsi' => 'Ekstrakurikuler volly untuk melatih kekuatan fisik dan kerjasama dalam tim'],
            ['id' => 'E003', 'nama_eskul' => 'Tari Tradisional', 'pembina' => 'Dewi', 'jadwal' => 'Jumat 13:30-15:30', 'ruangan' => 'Ruang Seni', 'kuota' => '25', 'deskripsi' => 'Mengembangkan bakat menari serta memahami budaya tradisional Indonesia'],
            ['id' => 'E004', 'nama_eskul' => 'Sepak Bola', 'pembina' => 'Eka', 'jadwal' => 'Kamis 15:00-17:00', 'ruangan' => 'Lapangan Sepak Bola', 'kuota' => '25', 'deskripsi' => 'Ekstrakurikuler sepak bola untuk melatih skill dan kerjasama dalam olahraga sepak bola'],
        ];

        foreach ($eskuls as $eskul) {
            eskul::create($eskul);
        }
    }
}
