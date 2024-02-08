<?php

declare(strict_types=1);

namespace App\Http\Controllers\Resume;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreResumeRequest;
use App\Http\Requests\UpdateResumeRequest;
use App\Models\Resume;
use Inertia\Inertia;
use Inertia\Response;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Resume/ResumeEn');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResumeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        return Inertia::render('Resume/ResumeEn', compact('resume'));
    }
    /**
     * Display the specified resource.
     */
    public function showCvEn(Resume $resume): Response
    {
        return Inertia::render('Resume/ResumeEn', compact('resume'));
    }
    /**
     * Display the specified resource.
     */
    public function showCvRu(Resume $resume): Response
    {
        return Inertia::render('Resume/ResumeRu', compact('resume'));
    }
    /**
     * Display the specified resource.
     */
    public function showCvDe(Resume $resume): Response
    {
        return Inertia::render('Resume/ResumeDe', compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResumeRequest $request, Resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
