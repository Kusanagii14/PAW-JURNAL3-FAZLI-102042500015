<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\MataKuliah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.

        
        // Akun Dosen Pengampu
        $dosen = User::create([
            'name' => 'Dr. Ir. Budi Santoso, M.T.',
            'email' => 'dosen@prime.lms',
            'nomor_induk' => '128521612510121901',
            'password' => Hash::make('password'),
            'role' => 'dosen',
        ]);

        // Akun Mahasiswa
        User::create([
            'name' => 'Ahmad Raihan Arifinza',
            'email' => 'mahasiswa@prime.lms',
            'nomor_induk' => '102042500015',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
        ]);

        // Data Awal Mata Kuliah
        MataKuliah::create([
            'kode' => 'CSG2H3',
            'nama' => 'Pengembangan Aplikasi Website',
            'dosen_id' => $dosen->id,
            'semester' => 3,
            'deskripsi' => 'Mata kuliah yang membahas tentang konsep dan praktik pembuatan web dinamis berbasis Laravel.',
        ]);
    }
}