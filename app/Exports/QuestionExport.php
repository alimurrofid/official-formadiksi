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
        return Question::select('id', 'email', 'nama', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'Email',
            'Nama',
            'Created at'
        ];
    }
}
