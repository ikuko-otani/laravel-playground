<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Article index - list all articles';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Article create form';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request and save to database in real app.
        return 'Article store - save new article';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Article show - Id: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Article edit form - ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Article update - ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Article destroy - ID: {$id}";
    }
}
