<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserAnnouncementsList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $announcements;
    public $editModal = false;
    public $title;
    public $price;
    public $category;
    public $description;
    public $announcementEdited;



    protected $listeners = [
        'loadUserAnnouncements',
    ];

    public function mount()
    {
        $this->loadUserAnnouncements();
    }

    public function loadUserAnnouncements()
    {
        $this->announcements = \App\Models\Announcement::where('user_id', auth()->user()->id)->paginate(3);
        /* $this->announcements = auth()->user()->announcements; */
    }

    /*public function editAnnouncementUser($announcements)
    {

        //$this->emitTo('create-announcement', 'edit', $announcement);

        $this->editModal = true;
        $announcement = Announcement::findOrFail($announcementEdited);
        $this->announcementEdited = $announcement->id;
        $this->title = $announcement->title;
        $this->price = $announcement->price;
        $this->category = $announcement->category->name;
        $this->description = $announcement->description;
        //deve salvare

    }*/


    public function editAnnouncementUser($announcement)
    {
        $this->emitTo('create-announcement', 'editAnnouncementUser', $announcement);
    }

    /*public function updateAnnouncementUser()
    {
        $this->validate();

        $announcement = Announcement::findOrFail($this->announcementEdited);
        $announcement->update([
            'title' => $this->title,
            'price' => $this->price,
            'category' => $this->category,
            'description' => $this->description,
        ]);

        $this->resetImputFields();
    }*/
    public function deleteAnnouncement(Announcement $announcement)
    {
        $announcement->delete();
        $this->loadUserAnnouncements();
    }
    private function resetInputFields()
    {
        $this->title = '';
        $this->price = '';
        $this->category = '';
        $this->description = '';
        $this->editModal = false;
    }

    /* Prendere Annunci Paginate */
    public function getAnnouncements()
    {
        return $this->announcements;
    }
    /* Prendere Links degli annunci */
    public function getAnnouncementsLinks()
    {
        return $this->announcements->links();
    }
    /* Render */
    public function render()
    {
        $this->loadUserAnnouncements();
        return view('livewire.user-announcements-list');
    }
}
