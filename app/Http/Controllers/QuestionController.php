<?php

namespace App\Http\Controllers;

use App\Exports\QuestionExport;
use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if ($request->has('search')) {
            $question = Question::where(function ($query) use ($request) {
                $query->where('email', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('nama', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('pertanyaan', 'LIKE', '%' . $request->search . '%');
            })->get();
            return view('dashboard.question', compact('question'));
        } else {
            $question = Question::all();
            return view('dashboard.question', compact('question'));
        }
    }

    public function exportexcel(){
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
