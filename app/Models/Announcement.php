<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Models\Image;
use App\Models\Category;
use App\Models\User;

class Announcement extends Model
{
    use HasFactory, Searchable;


    protected $fillable = ['title', 'description', 'category_id', 'user_id', 'image', 'price'];

    public function toSearcheableArray()
    {
        
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
        ];
        return $array;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public static function toBeRevisionedCount()
    {
        return Announcement::where('is_accepted', null)->count(); #null perche gli annunci non sono ancora stati verificati

    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
}
