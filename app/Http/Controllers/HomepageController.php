<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        
        $announcements = Announcement::where('is_accepted', True)->take(6)->get()->sortByDesc('created_at');
        

        return view('homepage', compact('announcements'));
    }

    public function filter()
    {
        $announcements = Announcement::find();
        return view('announcements.index', compact('announcements'));
    }
}
