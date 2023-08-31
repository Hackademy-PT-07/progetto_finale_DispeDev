<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        
        $announcements = Announcement::where('is_accepted', True)->orderBy('created_at', 'desc')->take(6)->get();
        

        return view('homepage', compact('announcements'));
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);

        return redirect()->back();
    }

    public function filterCategory(Category $categories)
    {
        $announcements = Announcement::all();
        return view('category.index', compact('categories', 'announcements'));
    }

    public function filterAnnouncements(Category $category)
    {
        
        $announcements = Category::find($category->id)->announcements()->where('is_accepted', true)->get();
        $totalAnnouncements = $announcements->count();
        return view('announcements.index', compact('category', 'announcements','totalAnnouncements'));
    }
}
