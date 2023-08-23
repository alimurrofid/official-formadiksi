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
        return Question::select('id','created_at', 'email', 'nama', 'pertanyaan')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'Created at',
            'Email',
            'Nama',
            'Pertanyaan',
        ];
    }
}
