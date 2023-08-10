<?php

namespace App\Http\Livewire;

use App\Models\Announcement;

use App\Models\Category;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    
    public $user_id;
    public $category_id;
    public $title;
    public $description;
    public $url_image;
    public $price;



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

    public function store(){
        
        $this->validate();
    
        $category = Category::find($this->category_id); /* mi trova la categoria con quel tipo di category id e da category mi crea l'annuncio */ 
        $category->announcements()->create([
            'title'=> $this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'url_image'=>$this->url_image,
            'user_id'=> auth()->user()->id,
        ]);

        $this->newAnnouncement();


         session()->flash('success', 'Annuncio creato correttamente.');

        
    }

    public function newAnnouncement(){

        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category_id = '';
        $this->url_image = '';

    }

    

    public function render()
    {
        $categories=Category::all();

        return view('livewire.create-announcement', compact('categories'));
    }
}
