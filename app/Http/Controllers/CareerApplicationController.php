<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\CareerApplication;
use Illuminate\Http\Request;

class CareerApplicationController extends Controller
{
    /**
     * Show the application form.
     */
    public function create(Career $career)
    {
        abort_unless($career->status === 'Open', 404);

        return view('seo-page/career-apply', [
            'career' => $career,
        ]);
    }

    /**
     * Store a new career application.
     */
    public function store(Request $request, Career $career)
    {
        abort_unless($career->status === 'Open', 404);

        $validated = $request->validate([
            'full_name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'phone' => [
                'required',
                'string',
                'max:50',
            ],

            'cover_letter' => [
                'nullable',
                'string',
                'max:10000',
            ],

            'cv' => [
                'required',
                'file',
                'mimes:pdf,doc,docx',
                'max:5120',
            ],
        ]);

        // Store CV
        $cvPath = $request
            ->file('cv')
            ->store('applications', 'public');

        // Create application
        CareerApplication::create([
            'career_id' => $career->id,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'cover_letter' => $validated['cover_letter'] ?? null,
            'cv_path' => $cvPath,
            'status' => 'New',
        ]);

        return redirect()
            ->route('career.details', $career->id)
            ->with(
                'success',
                'Your application has been submitted successfully.'
            );
    }
}