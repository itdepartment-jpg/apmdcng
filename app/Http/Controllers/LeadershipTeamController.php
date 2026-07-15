<?php

namespace App\Http\Controllers;

use App\Models\LeadershipTeam;
use App\Models\SectionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Illuminate\Support\HtmlString;
use voku\helper\HtmlDomParser;
use voku\helper\AntiXSS; // For XSS protectio
class LeadershipTeamController extends Controller
{
    /**
     * Display the leadership team page
     */
    public function index()
    {
        return Inertia::render('Admin/Leadership/Index', [
            'header' => SectionHeader::getBySection('leadership_team'),
            'executives' => LeadershipTeam::executives()->get(),
            'seniors' => LeadershipTeam::seniors()->get(),
            'keyPersonnel' => LeadershipTeam::keyPersonnel()->get(),
            'canEdit' => auth()->user()?->can('edit_leadership') ?? false
            //            'canEdit' => true
        ]);
    }

    public function cBladeindex11()
    {
        return view('seo-page.team', [
            'executives' => LeadershipTeam::executives()->orderBy('order')->get(),
            'seniors' => LeadershipTeam::seniors()->orderBy('order')->get(),
            'keyPersonnel' => LeadershipTeam::keyPersonnel()->orderBy('order')->get(),
            'header' => [
                'title' => 'Meet Our Leadership',
                'subtitle' => 'Experts Driving Marine Innovation',
                'description' => 'Guided by industry veterans with decades of combined experience in diving, marine operations, and offshore engineering. Our team\'s expertise ensures operational excellence and safety.'
            ]
        ]);
    }

    public function Bladeindex()
    {
        // Safely get data with fallbacks
        $executives = LeadershipTeam::executives()->orderBy('order')->get() ?? collect();
        $seniors = LeadershipTeam::seniors()->orderBy('order')->get() ?? collect();
        $keyPersonnel = LeadershipTeam::keyPersonnel()->orderBy('order')->get() ?? collect();

        return view('seo-page.team', [
            'executives' => $executives,
            'seniors' => $seniors,
            'keyPersonnel' => $keyPersonnel,
            'header' => [
                'title' => 'Meet Our Leadership',
                'subtitle' => 'Experts Driving Marine Innovation',
                'description' => 'Guided by industry veterans with decades of combined experience in diving, marine operations, and offshore engineering. Our team\'s expertise ensures operational excellence and safety.'
            ]
        ]);
    }

    /**
     * Store a new team member
     */

    public function store1(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:executive,senior,key',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'sometimes|integer'
        ]);

        // Sanitize HTML description using HtmlDomParser
        $dom = HtmlDomParser::str_get_html($validated['description']);

        // Remove potentially dangerous elements/attributes
        $dom->removeXss();

        // Get cleaned HTML
        $cleanDescription = new HtmlString($dom->save());

        // Store the image
        $path = $request->file('image')->store('leadership-images', 'public');

        LeadershipTeam::create([
            'name' => $validated['name'],
            'position' => $validated['position'],
            'description' => $cleanDescription,
            'category' => $validated['category'],
            'image_path' => $path,
            'order' => $validated['order'] ?? 0
        ]);

        return redirect()->back()->with('success', 'Team member added successfully');
    }
    public function store2(Request $request)
    {


        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:executive,senior,key',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'sometimes|integer'
        ]);
        // Sanitize HTML description using HtmlDomParser
        // Alternative: Basic HTML sanitization without AntiXSS
        $dom = HtmlDomParser::str_get_html($validated['description']);
        $cleanDescription = new HtmlString($dom->save());


        // Store the image
        $path = $request->file('image')->store('leadership-images');

        LeadershipTeam::create([
            'name' => $validated['name'],
            'position' => $validated['position'],
            'description' => $cleanDescription,
            'category' => $validated['category'],
            'image_path' => $path,
            'order' => $validated['order'] ?? 0
        ]);

        return redirect()->back()->with('success', 'Team member added successfully');
    }

    public function store(Request $request)
    {

        //        dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:executive,senior,key',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'sometimes|integer'
        ]);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('leadership-images');
        }

        LeadershipTeam::create($validated);

        return back()->with('success', 'Team member created successfully');
    }

    /**
     * Update a team member
     */
    public function update1(Request $request, LeadershipTeam $leadershipTeam)
    {

        //        dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:executive,senior,key',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'sometimes|integer'
        ]);

        // Update image if provided
        if ($request->hasFile('image')) {
            // Delete old image
            Storage::delete($leadershipTeam->image_path);

            // Store new image
            $path = $request->file('image')->store('leadership-images');
            $validated['image_path'] = $path;
        }

        $leadershipTeam->update($validated);

        return redirect()->back()->with('success', 'Team member updated successfully');
    }


    public function update2(Request $request, LeadershipTeam $leadershipTeam)
    {

        dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:executive,senior,key',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'sometimes|integer',
            //            'keep_current_image' => 'sometimes|string' // New field
        ]);

        // Handle image upload only if new image was provided
        // Handle image upload only if new image was provided
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($leadershipTeam->image_path) {
                Storage::delete($leadershipTeam->image_path);
            }

            // Store new image
            $validated['image_path'] = $request->file('image')->store('leadership-images');
        }
        //        if ($request->hasFile('image')) {
        //            // Delete old image if exists
        //            if ($leadershipTeam->image_path) {
        //                Storage::delete($leadershipTeam->image_path);
        //            }
        //
        //            // Store new image
        //            $path = $request->file('image')->store('leadership-images');
        //            $validated['image_path'] = $path;
        //        } elseif ($request->input('keep_current_image') !== 'true') {
        //            // If no new image and not keeping current, remove the image
        //            if ($leadershipTeam->image_path) {
        //                Storage::delete($leadershipTeam->image_path);
        //            }
        //            $validated['image_path'] = null;
        //        }
        // Else keep the current image (do nothing)

        //        dd($validated);

        $leadershipTeam->update($validated);

        return redirect()->back()->with('success', 'Team member updated successfully');
    }
    public function update(Request $request, LeadershipTeam $leadershipTeam)
    {
        // Handle both JSON and form-data requests
        $input = $request->all();

        // For multipart requests, manually merge the data
        if (str_starts_with($request->header('Content-Type'), 'multipart/form-data')) {
            $input = array_merge(
                $request->except('image'),
                ['image' => $request->file('image')]
            );
        }

        $validated = validator($input, [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:executive,senior,key',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'sometimes|integer'
        ])->validate();

        // Image handling
        if ($request->hasFile('image')) {
            // Delete old image
            if ($leadershipTeam->image_path) {
                Storage::delete($leadershipTeam->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('leadership-images');
        }

        $leadershipTeam->update($validated);

        return back()->with('success', 'Team member updated successfully');
    }
    /**
     * Update member ordering
     */
    public function updateOrder(Request $request, LeadershipTeam $leadershipTeam)
    {
        $request->validate([
            'order' => 'required|integer'
        ]);

        $leadershipTeam->update(['order' => $request->order]);

        return response()->json(['success' => true]);
    }

    /**
     * Delete a team member
     */
    public function destroy(LeadershipTeam $leadershipTeam)
    {
        // Delete associated image
        if ($leadershipTeam->image_path) {
            Storage::delete($leadershipTeam->image_path);
        }

        $leadershipTeam->delete();

        return redirect()->back()->with('success', 'Team member deleted successfully');
    }

    /**
     * Update section header
     */
    public function updateHeader(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        SectionHeader::updateOrCreate(
            ['section_name' => 'leadership_team'],
            $validated
        );

        return redirect()->back()->with('success', 'Header updated successfully');
    }
}
