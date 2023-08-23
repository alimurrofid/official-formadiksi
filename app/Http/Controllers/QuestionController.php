<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Exports\QuestionExport;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use Termwind\Components\Span;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('dashboard.question');
    }

    public function table()
    {
        $query = Question::latest();
        return Datatables::of($query)
            ->addIndexColumn()
            ->addColumn('opsi', function ($data) {
                $pertanyaan = str_replace(' ', '%20', $data->pertanyaan);

                $mailLink = '<a href="mailto:' . $data->email . '?subject=Question%20from%20web%20official%20Formadiksi&body=pertanyaan%3A%20' . $pertanyaan . '%3F%0D%0Ajawaban%3A%20" class="btn icon btn-primary m-1" title="Jawab via Email"><i class="bi bi-envelope-at"></i></a>';

                $deleteForm = '<form action="' . route('question.destroy', $data->id) . '" method="post" id="delete-' . $data->id . '">' .
                    csrf_field() .
                    method_field('delete') .
                    '<button type="button" class="btn icon btn-danger m-1 delete-btn" data-id="' . $data->id . '" title="Hapus Data"><i class="bi bi-trash"></i></button>' .
                    '</form>';

                return $mailLink . $deleteForm;
            })
            ->rawColumns(['opsi'])
            ->make(true);
    }


    public function exportexcel()
    {
        return Excel::download(new QuestionExport, 'question.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form.questioncreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        //
        $data = $request->validated();
        Question::create($data);
        $faq = Faq::all();
        return view('landingpage', compact('faq'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        //
    }

    public function deleteAll()
    {
        Question::truncate();
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();
        return redirect()->route('question.index');
    }
}
