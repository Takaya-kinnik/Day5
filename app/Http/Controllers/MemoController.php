<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memos = Memo::all();
        return view('index', compact('memos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Memo::insert([
            "memo" => $request->content,
        ]);
        $memos = Memo::all();
        return view('index', compact('memos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Memo $memo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Memo $memo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Memo $memo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Memo $memo)
    {
        Memo::where('id', $request->id)->delete();
        $memos = Memo::all();
        return view('index', compact('memos'));
    }
}
