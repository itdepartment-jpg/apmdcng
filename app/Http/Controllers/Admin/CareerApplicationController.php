<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class CareerApplicationController extends Controller
{
    /**
     * Display all career applications.
     */
    public function index()
    {
        $applications = CareerApplication::with('career')
            ->latest()
            ->get();

        return Inertia::render('Admin/CareerApplications/Index', [
            'applications' => $applications,
        ]);
    }

    /**
     * Display a specific application.
     */
    public function show(CareerApplication $careerApplication)
    {
        $careerApplication->load('career');

        return Inertia::render('Admin/CareerApplications/Show', [
            'application' => $careerApplication,
        ]);
    }

    /**
     * Update the application status.
     */
    public function updateStatus(
        Request $request,
        CareerApplication $careerApplication
    ) {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:New,Reviewing,Shortlisted,Interview,Hired,Rejected',
            ],
        ]);

        $careerApplication->update([
            'status' => $validated['status'],
        ]);

        return back()->with(
            'success',
            'Application status updated successfully.'
        );
    }

    /**
     * Delete an application.
     */
    public function destroy(CareerApplication $careerApplication)
    {
        // Delete CV from storage
        if (
            $careerApplication->cv_path &&
            Storage::disk('public')->exists($careerApplication->cv_path)
        ) {
            Storage::disk('public')->delete(
                $careerApplication->cv_path
            );
        }

        $careerApplication->delete();

        return redirect()
            ->route('admin.career-applications.index')
            ->with(
                'success',
                'Application deleted successfully.'
            );
    }
}