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

    public function store(){
                
        Announcement::create([
            'user_id'=> auth()->user()->id,
            'category_id'=> $categories->id,
            'title'=> $this->title,
            'description'=> $this->description,
            'url_image'=> $this->image,
            'price'=>$this->price,
            
        ]);

    }

    protected $rules = [

    ];

    public function render()
    {
        $categories=Category::all();

        return view('livewire.create-announcement', compact('categories'));
    }
}
