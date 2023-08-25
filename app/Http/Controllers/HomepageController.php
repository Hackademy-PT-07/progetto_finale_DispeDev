<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        
        $announcements = Announcement::where('is_accepted', True)->take(6)->get()->sortByDesc('created_at');
        

        return view('homepage', compact('announcements'));
    }

    public function filterCategory(Category $categories)
    {
        $announcements = Announcement::all();
        return view('announcements.category', compact('categories', 'announcements'));
    }

    public function filterAnnouncements(Category $category)
    {
        $announcements = Announcement::all();
        return view('announcements.index', compact('category', 'announcements'));
    }
}
