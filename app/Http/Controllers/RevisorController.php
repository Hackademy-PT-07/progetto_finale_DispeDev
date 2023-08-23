<?php

namespace App\Http\Controllers;
use App\Mail\workWithUs;
use Illuminate\Http\Request;
use App\Models\Announcement;
use Auth;
use Artisan;
use Illuminate\Support\Facades\Mail;

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

    public function workWithUs(){
        Mail::to('admin@presto.it')->send(new workWithUs(Auth::user()));
        
        return redirect()->back()->with('message', 'Grazie per la tua richiesta di diventare revisore, ti risponderemo al piu\' presto');

    }

    public function makeRevisor(User $user){
        #call richiama il comando al click
        
        Artisan::call('presto:makeUserRevisor', ["email" => $user->email]);
        return redirect('/')->with('message', 'Complimenti, l\'utente e\' diventato revisore');
    }
}
