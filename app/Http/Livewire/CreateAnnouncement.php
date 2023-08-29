<?php

namespace App\Http\Livewire;

use App\Models\Announcement;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Jobs\ResizeImage;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    
    public $user_id;
    public $category_id;
    public $title;
    public $description;
    public $url_image;
    public $price;

    public $announcement;

protected $listeners = [
    'edit',
];


    protected function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required'
        ];
    }

    protected $messages = [
        'title.required' => 'Il campo non può essere vuoto.',
        'description.required' => 'Il campo non può essere vuoto.',
        'category_id.required' => 'Il campo non può essere vuoto',
        'price.required' => 'Il campo non può essere vuoto.',

    ];

    public function mount(Announcement $announcement)
    {
        $this->announcement = $announcement;
        $this->title = $announcement->title;

    }

    public function store(){
        
        $this->validate();
        $category = Category::find($this->category_id)->announcements->create($this->validate()); /* mi trova la categoria con quel tipo di category id e da category mi crea l'annuncio */ 
        /*$category->announcements()->create([
            'title'=> $this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            #'url_image'=>$this->url_image->store('photos'),
            'user_id'=> auth()->user()->id,
        ]);*/
        if(count($this->url_image)){
            foreach($this->url_image as $image){
                /*$this->announcement->images()->create(['path'=> $image->store('images', 'public')]);*/
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path'=> $image->store($newFileName, 'public')]);
            
                dispatch(new ResizeImage($newImage->path, 400, 300));
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        $this->resetImputFields();

        $this->emitTo('user-announcements-list', 'loadUserAnnouncements');
        

         session()->flash('success', 'Annuncio creato correttamente.');

        
    }

    public function newAnnouncement(){

        $this->announcement = new Announcement;
        /*
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category_id = '';
        $this->url_image = '';
        */
    }


    public function editAnnouncementUser($user_id)
    {
        $this->announcement = Announcement::find($user_id);
        $this->announcement->update([
            'title' => $this->title,
        ]);
    }

    public function render()
    {
        $categories=Category::all();

        return view('livewire.create-announcement', compact('categories'));
    }

}