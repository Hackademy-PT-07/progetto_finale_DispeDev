<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Jobs\ApplyWatermark;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Collection;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class CreateAnnouncement extends Component
{
    use WithFileUploads;
    
    public $user_id;
    public $category_id;
    public $title;
    public $description;
    public $images = [];
    public $image;
    public $temporary_images;
    public $price;
    public $dbimages;
    public $announcement;

protected $listeners = [
    'editAnnouncementUser',
];


    protected function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'images.*'=>'image',
            'temporary_images.*'=>'image',
        ];
    }

    protected $messages = [
        'title.required' => 'Il campo non può essere vuoto.',
        'description.required' => 'Il campo non può essere vuoto.',
        'category_id.required' => 'Il campo non può essere vuoto',
        'price.required' => 'Il campo non può essere vuoto.',
        'temporary_images.required'=>'Immagine richiesta',
        'temporary_images.*.image'=>'I file devono essere immagini',
        'temporary_images.*.max'=>'Immagine deve essere di massimo 1mb',
        'images.image'=>'Il file deve essere di tipo immagine',
       


    ];



    public function mount(Announcement $announcement)
    {
        $this->announcement = $announcement;
        $this->title = $announcement->title;

    }

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }


    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }

    }
    public function store(){
        
        $this->validate();
       /* $this->announcement->user()->associate(Auth::user());
        $this->announcement = Category::find($this->category_id)->announcements()->create($this->validate());
        */
       /*$category =  Category::find($this->category_id);*/
         /* mi trova la categoria con quel tipo di category id e da category mi crea l'annuncio */ 
         
         $this->announcement = Announcement::create([
            'title'=> $this->title,
            'description'=>$this->description,
            'price'=>$this->price,
           'category_id'=> $this->category_id,
            'user_id'=> auth()->user()->id,
        ]);
       /* $this->announcement->user()->associate(Auth::user());*/
        
        $this->announcement->save(); 
        if(count($this->images)){
            foreach($this->images as $image){
                /*$this->announcement->images()->create(['path'=> $image->store('images', 'public')]);*/
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path'=> $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);
            }
            
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        $this->cleanForm();

        $this->emitTo('user-announcements-list', 'loadUserAnnouncements');

        
        

         session()->flash('success', 'Annuncio creato correttamente. Verra\' inserito dopo la revisione');
        $this->cleanForm();
        
    }

    public function cleanForm(){

      
        
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category_id = '';
        $this->images = [];
        $this->temporary_images=[];

        
    }


    public function editAnnouncementUser($announcement)
    {
        $this->announcement = Announcement::find($announcement);
        $this->title = $this->announcement->title;
        $this->description = $this->announcement->description;
        $this->price = $this->announcement->price;
        $this->category_id = $this->announcement->category_id;
        $this->dbimages = $this->announcement->images()->get();
        


         
    }

    public function render()
    {
        $categories=Category::all();

        return view('livewire.create-announcement', compact('categories'));
    }

}