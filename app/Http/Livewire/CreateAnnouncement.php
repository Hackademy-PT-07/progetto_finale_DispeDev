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
    public $image;
    public $price;



    protected function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required'
        ];
    }

    protected $messages = [
        'title.required' => 'Il campo non può essere vuoto.',
        'description.required' => 'Il campo non può essere vuoto.',
        'price.required' => 'Il campo non può essere vuoto.',

    ];

    public function store(){
        
        $this->validate();
    
        $category = Category::find($this->category_id); 
        $category->announcements()->create([
            'title'=> $this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'user_id'=> auth()->user()->id,
        ]);

        $this->newAnnouncement();


         session()->flash('success', 'Annuncio creato correttamente.');

        
    }

    public function newAnnouncement(){

        $this->title = '';
        $this->description = '';
        $this->price = '';

    }

    

    public function render()
    {
        $categories=Category::all();

        return view('livewire.create-announcement', compact('categories'));
    }
}
