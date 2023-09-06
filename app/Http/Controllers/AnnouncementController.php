<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use TeamTNT\TNTSearch\TNTSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $announcements = Announcement::where('is_accepted', True)->orderBy('created_at', 'desc')->paginate(6);
        $totalAnnouncements = $announcements->total();
  
        return view('announcements.index', compact('announcements', 'totalAnnouncements'));
    }

    public function filter(Request $request)
    {

        $searched = $request->searched;

        $category_id = $request->category_id;
        $announcements = null;


        if (!isset($category_id)) {
            $announcements = Announcement::search($searched)->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        } elseif (!isset($searched)) {
            $announcements = Category::find($category_id)->announcements()->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $announcements = Announcement::search($request->searched)->where('is_accepted', true)->where('category_id', $request->category_id)->orderBy('created_at', 'desc')->paginate(6);
        }

        $totalAnnouncements = $announcements->count();

        return view('announcements.index', compact('announcements', 'totalAnnouncements'));
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

    public function myAnnouncements(){

        $announcements = Announcement::where('is_accepted', True)->where('user_id', '=', Auth::id())->orderBy('created_at', 'desc')->paginate(6);
        $totalAnnouncements = $announcements->total();
  
        return view('auth.announcements-show', compact('announcements', 'totalAnnouncements'));
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
