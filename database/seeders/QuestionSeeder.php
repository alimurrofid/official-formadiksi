<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('faq')->insert([
            [
                'email' => 'example@mail.com',
                'nama' => 'John Doe',
                'pertanyaan' => 'Apa ada syarat khusus untuk menjadi anggota formadiksi?'
            ],
            [
                'email' => 'contoh@mail.com',
                'nama' => 'Doe Jhon',
                'pertanyaan' => 'Berapa kali pertemuan rutin dalam formadiksi?'
            ],
            [
                'email' => 'examtoh@mail.com',
                'nama' => 'Johe Don',
                'pertanyaan' => 'Maaf banget kak, saya bingung mau nanya apa lagi huhu :('
            ],
        ]);
    }
}
