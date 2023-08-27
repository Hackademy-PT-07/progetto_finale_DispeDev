<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {

        $announcements = Announcement::orderBy('created_at', 'desc')->where('is_accepted', true)->take(6)->get();
        return view('homepage', compact('announcements'));
    }

    public function filter()
    {
        $announcements = Announcement::find();
        return view('announcements.index', compact('announcements'));
    }
}
