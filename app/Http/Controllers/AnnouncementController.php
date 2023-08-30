<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use TeamTNT\TNTSearch\TNTSearch;

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
        /* Prova filtraggio esito:negativo
        $searched = $request->imput('searched');
        $category_id = $request->select('category_id');

        $tnt = new TNTsearch();
        $tnt->loadConfig([
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'database' => env('DB_DATABASE', 'presto'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'rootroot'),
            'storage' => storage_path(),
        ]);

        $tnt->selectIndex('announcements.index');
        $results = $tnt->search($searched);
        
        //Filtra per categoria, se specificata

        if(!empty($category_id)) 
        {
            $results = $results->where('category_id', $category_id);
        }
        return view('announcements.index', compact('results'));
        */

      // filtraggio esito:negativo
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
