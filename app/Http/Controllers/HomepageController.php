<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {

        $announcements = Announcement::orderBy('created_at', 'desc')->where('is_accepted', true)->take(6)->get();
        return view('homepage', compact('announcements'));
    }

    public function filterCategory(Category $categories)
    {
        $announcements = Announcement::all();
        return view('category.index', compact('categories', 'announcements'));
    }

    public function filterAnnouncements(Category $category)
    {
        $announcements = Announcement::all();
        return view('announcements.index', compact('category', 'announcements'));
    }
}
