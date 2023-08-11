<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('faq')->insert([
            [
                'question' => 'Kapan pencairan semester ganjil 2023/2024 ?',
                'answer' => 'Pencarian biasanya paling cepat satu bulan setelah masuk perkuliahan tapi tergantung
                juga dengan pengajuan kampus. Jadi dimohon bersabar untuk menantikan pencairan
                semester ganjil 2023/2024. Berdoa saja semoga cepat dicairkan.',
            ],
            [
                'question' => 'Apakah ada beasiswa untuk mahasiswa baru ?',
                'answer' => 'repellat repellendus! Soluta ad magnam nesciunt id doloremque nemo quasi ex
                esse, veniam fugiat illum aliquam vitae, praesentium incidunt dicta, necessitatibus
                mollitia a tempora explicabo? Fugiat eveniet vel minima inventore animi fuga',
            ],
            [
                'question' => 'Kapan pendaftaran Cafung Formadiksi Polinema dibuka ?',
                'answer' => 'consectetur dignissimos et ex enim mollitia, praesentium incidunt quis aliquid. Ab,
                recusandae impedit. Commodi dignissimos beatae eius quidem iure quaerat ullam ad ab?
                Neque, laboriosam modi fuga ut vero laborum itaque hic explicabo suscipit id
                expedita sapiente?',
            ],
        ]);
    }
}
