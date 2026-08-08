<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class CareerController extends Controller
{
    /**
     * Display a listing of careers.
     */
    public function index()
    {
        return Inertia::render('Admin/Careers/Index', [
            'careers' => Career::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new career.
     */
    public function create()
    {
        return Inertia::render('Admin/Careers/Create');
    }

    /**
     * Store a newly created career.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->validationRules());

        // Upload job document
        if ($request->hasFile('job_document')) {
            $validated['job_document'] = $request
                ->file('job_document')
                ->store('careers', 'public');
        }

        // Generate slug
        $validated['slug'] = Str::slug($validated['title']);

        // Create career
        Career::create($validated);

        return redirect()
            ->route('admin.careers.index')
            ->with('success', 'Career created successfully.');
    }

    /**
     * Show the form for editing the specified career.
     */
    public function edit(Career $career)
    {
        return Inertia::render('Admin/Careers/Edit', [
            'career' => $career,
        ]);
    }

    /**
     * Update the specified career.
     */
    public function update(Request $request, Career $career)
    {
        $validated = $request->validate($this->validationRules());

        // Upload new job document
        if ($request->hasFile('job_document')) {

            // Remove the previous document
            if (
                $career->job_document &&
                Storage::disk('public')->exists($career->job_document)
            ) {
                Storage::disk('public')->delete($career->job_document);
            }

            $validated['job_document'] = $request
                ->file('job_document')
                ->store('careers', 'public');
        }

        // Update slug
        $validated['slug'] = Str::slug($validated['title']);

        // Update career
        $career->update($validated);

        return redirect()
            ->route('admin.careers.index')
            ->with('success', 'Career updated successfully.');
    }

    /**
     * Remove the specified career.
     */
    public function destroy(Career $career)
    {
        // Remove associated document
        if (
            $career->job_document &&
            Storage::disk('public')->exists($career->job_document)
        ) {
            Storage::disk('public')->delete($career->job_document);
        }

        $career->delete();

        return redirect()
            ->route('admin.careers.index')
            ->with('success', 'Career deleted successfully.');
    }

    /**
     * Validation rules shared by store and update.
     */
    private function validationRules(): array
    {
        return [

            // Career Information
            'reference_no' => [
                'nullable',
                'string',
                'max:100',
            ],

            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'department' => [
                'required',
                'string',
                'max:255',
            ],

            'location' => [
                'required',
                'string',
                'max:255',
            ],

            'employment_type' => [
                'required',
                'string',
                'max:100',
            ],

            // Requirements
            'experience_required' => [
                'nullable',
                'string',
                'max:255',
            ],

            'education' => [
                'nullable',
                'string',
                'max:255',
            ],

            'salary' => [
                'nullable',
                'string',
                'max:255',
            ],

            'vacancies' => [
                'nullable',
                'integer',
                'min:1',
            ],

            'application_deadline' => [
                'nullable',
                'date',
            ],

            // Job Details
            'description' => [
                'nullable',
                'string',
            ],

            'responsibilities' => [
                'nullable',
                'string',
            ],

            'requirements' => [
                'nullable',
                'string',
            ],

            // Publication
            'status' => [
                'required',
                'in:Draft,Open,Closed',
            ],

            'featured' => [
                'nullable',
                'boolean',
            ],

            // Job Document
            'job_document' => [
                'nullable',
                'file',
                'mimes:pdf,doc,docx',
                'max:5120',
            ],
        ];
    }
}