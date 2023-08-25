<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $announcementsSearch = Announcement::where('is_accepted', True)->get()->sortByDesc('created_at');
        $totalAnnouncements = $announcementsSearch->count();

        

        return view('announcements.index', compact('announcementsSearch', 'totalAnnouncements'));
    }

    public function filter(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->get();
        return view('announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Announcement $announcement)
    {
        return view('announcements.create', compact('announcement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return redirect()->back()->with(['success' => 'Annuncio creato correttamente.']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $announcement = Announcement::find($id);

        return view('announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }


}
