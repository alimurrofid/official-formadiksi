<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Exports\QuestionExport;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Termwind\Components\Span;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $question = Question::all();
        return view('dashboard.question', compact('question'));
    }

    public function table()
    {
        $query = Question::latest();
        return Datatables::of($query)
            ->addIndexColumn()
            ->addColumn('opsi', function ($data) {
                $mailLink = '<button type="button" class="btn icon icon-left btn-primary" data-bs-toggle="modal"
                data-bs-target="#AnswerFormModal' . $data->id . '"><i class="bi bi-envelope-at"></i></button>';

                $modal = '<div class="modal fade text-left" id="AnswerFormModal' . $data->id . '" tabindex="-1" role="dialog"
                aria-labelledby="questionAnswerModal' . $data->id . '" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                    role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="questionAnswerModal' . $data->id . '">Answer question from' . $data->nama . '</h4>
                            <p id="pertanyaanAnswerModal' . $data->id . '">Question: ' . $data->pertanyaan . '</p>
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <form id="answer-form-' . $data->id . '" method="POST" action="' . route('question.answer', $data->id) . '">
                            ' .
                    csrf_field() .
                    '
                            <div class="modal-body">
                                <div class="form-group">
                                <input type="hidden" name="nama" value="' . $data->nama . '">
                                <input type="hidden" name="email" value="' . $data->email . '">
                                <input type="hidden" name="pertanyaan" value="' . $data->pertanyaan . '">
                                <textarea id="editor' . $data->id . '" name="description"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="submit"
                                    class="btn btn-primary ml-1 answer-btn"
                                    data-id="' . $data->id . '" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Submit</span>   
                                </button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                ';

                $script = '<script>
                ClassicEditor
                    .create(document.querySelector("#editor' . $data->id . '"), {
                        ckfinder: {
                            uploadUrl: "' . route('question.upload', ['_token' => csrf_token()]) . '",
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    });
                </script>';

                $deleteForm = '<form action="' . route('question.destroy', $data->id) . '" method="post" id="delete-' . $data->id . '">' .
                    csrf_field() .
                    method_field('delete') .
                    '<button type="button" class="btn icon btn-danger m-1 delete-btn" data-id="' . $data->id . '" title="Hapus Data"><i class="bi bi-trash"></i></button>' .
                    '</form>';

                return $mailLink . $deleteForm . $modal . $script;
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
        return view('landingpage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        //
        $data = $request->validated();
        Question::create($data);
        $question = question::all();
        return view('landingpage', compact('question'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for Answering the specified resource.
     */
    public function edit(Question $question)
    {
        //
        return view('answerquestion', compact('question'));
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

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    public function sendAnswer(Question $question, Request $request)
    {
        $inputData = $request->all();
        Mail::to($question->email)->send(new SendEmail($inputData));

        return redirect()->route('question.index');
    }

}
