<?php

namespace App\Http\Controllers;

use App\Models\PressRelease;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PressReleaseController extends Controller
{
    /**
     * Display a listing of press releases (admin)
     */
    public function index()
    {
//        $this->authorize('manage-news');

        return Inertia::render('Admin/PressReleases/Index', [
            'pressReleases' => PressRelease::latest('released_at')
                ->paginate(10),
            'canEdit' => true
        ]);
    }

    /**
     * Show the form for creating a new press release
     */
    public function create()
    {
        $this->authorize('manage-news');

        return Inertia::render('PressReleases/CreateEdit');
    }

    /**
     * Store a newly created press release
     */
    public function store(Request $request)
    {
        $this->authorize('manage-news');

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:500',
            'content' => 'required|string',
            'released_at' => 'required|date',
            'pdf' => 'nullable|file|mimes:pdf|max:5120'
        ]);

        $pdfPath = $request->hasFile('pdf')
            ? $request->file('pdf')->store('press-releases', 'public')
            : null;

        PressRelease::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'summary' => $validated['summary'],
            'content' => $validated['content'],
            'released_at' => $validated['released_at'],
            'pdf_path' => $pdfPath
        ]);

        return redirect()->route('press-releases.index')->with('success', 'Press release created successfully');
    }

    /**
     * Display a single press release
     */
    public function show(PressRelease $pressRelease)
    {
        return Inertia::render('PressReleases/Show', [
            'pressRelease' => $pressRelease,
            'canEdit' => auth()->user()?->can('manage-news')
        ]);
    }

    /**
     * Show the form for editing a press release
     */
    public function edit(PressRelease $pressRelease)
    {
        $this->authorize('manage-news');

        return Inertia::render('PressReleases/CreateEdit', [
            'pressRelease' => $pressRelease
        ]);
    }

    /**
     * Update the specified press release
     */
    public function update(Request $request, PressRelease $pressRelease)
    {
        $this->authorize('manage-news');

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:500',
            'content' => 'required|string',
            'released_at' => 'required|date',
            'pdf' => 'nullable|file|mimes:pdf|max:5120'
        ]);

        $pdfPath = $pressRelease->pdf_path;
        if ($request->hasFile('pdf')) {
            if ($pressRelease->pdf_path) {
                Storage::disk('public')->delete($pressRelease->pdf_path);
            }
            $pdfPath = $request->file('pdf')->store('press-releases', 'public');
        }

        $pressRelease->update([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'summary' => $validated['summary'],
            'content' => $validated['content'],
            'released_at' => $validated['released_at'],
            'pdf_path' => $pdfPath
        ]);

        return redirect()->route('press-releases.index')->with('success', 'Press release updated successfully');
    }

    /**
     * Remove the specified press release
     */
    public function destroy(PressRelease $pressRelease)
    {
        $this->authorize('manage-news');

        if ($pressRelease->pdf_path) {
            Storage::disk('public')->delete($pressRelease->pdf_path);
        }
        $pressRelease->delete();

        return redirect()->route('press-releases.index')->with('success', 'Press release deleted successfully');
    }
}
