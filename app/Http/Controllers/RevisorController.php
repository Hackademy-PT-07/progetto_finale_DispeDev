<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
class RevisorController extends Controller
{
    public function index(){
        $announcementToCheck = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcementToCheck'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(True); #e' un metodo in announcement controller
        return redirect()->back()->with('success', 'Annuncio accettato correttamente.');
    }

    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(False);
        return redirect()->back()->with('success', 'Annuncio rifiutato correttamente.');
    }
}
