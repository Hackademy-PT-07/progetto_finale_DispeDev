<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $announcements = Announcement::all();
        $totalAnnouncements = $announcements->count();
        
        return view('announcements.index', compact('announcements', 'totalAnnouncements'));
    }

    public function filter(Request $request)
    {
        
        $category = Category::find($request->category_id);
        
        $announcements = $category->announcements()->get();

        return view('announcements.index', compact('category','announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcements.create');
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
        $announcement=Announcement::find($id);
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
