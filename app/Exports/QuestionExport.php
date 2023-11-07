<?php

namespace App\Exports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\FromCollection;

class QuestionExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Question::select('id','created_at', 'email', 'nama', 'nim','jurusan','prodi','angkatan','untuk','pertanyaan','answered_by')->get();
    }

    public function headings(): array
    {
        return [
            "id",
            "Created at",
            "Email",
            "Nama",
            "NIM",
            "Jurusan",
            "Prodi",
            "Angkatan",
            "Untuk",
            "Pertanyaan",
            "Answered by"
        ];
    }
}
