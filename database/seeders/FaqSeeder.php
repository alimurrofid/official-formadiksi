<?php

namespace Database\Seeders;

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
            [
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ?',
                'answer' => 'Cras vitae felis vel mauris gravida scelerisque eget vitae nulla. Nam semper pharetra ultricies. Suspendisse potenti. Pellentesque congue, erat ut cursus mollis, metus elit semper mi, vitae venenatis tortor velit non ligula. Integer et posuere lorem. Fusce imperdiet, nisl quis accumsan placerat, nunc sem rutrum neque, in venenatis nisl felis a turpis. Nunc suscipit porta varius. Maecenas eget nibh aliquet, varius risus eget, elementum eros. Proin risus eros, tempor a luctus eu, rhoncus quis metus. Cras pharetra ac est pretium dictum. Mauris metus ex, aliquet quis diam vel, ultricies mollis lorem. Mauris.',
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ?',
                'answer' => 'egestas ligula ac sollicitudin mattis. Phasellus viverra leo quam, vel accumsan purus feugiat vel. Nullam diam ex, dapibus condimentum justo at, condimentum consectetur ante. Quisque massa neque, ornare non nisi nec, gravida semper est. Etiam sed egestas diam. Donec nec massa tempus, vestibulum mauris a, varius arcu. Maecenas quis ante dignissim, placerat magna quis, fermentum turpis. Ut pellentesque purus nisi, sagittis tempus eros rutrum non. Suspendisse vehicula magna ac pretium congue.',
            ],
        ]);
    }
}
