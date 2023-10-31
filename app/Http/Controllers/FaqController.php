<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $faq = Faq::all();
        return view('dashboard.faq', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form.faqcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        //
        $data = $request->validated();
        Faq::create($data);
        return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        //
        $faq = Faq::find($faq->id);
        return view('form.faqedit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFaqRequest $request, Faq $faq)
    {
        //
        $data = $request->validated();
        $faq->update($data);
        return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        //
        $faq->delete();
        return redirect()->route('faq.index');
    }

}
