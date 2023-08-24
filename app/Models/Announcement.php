<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id', 'user_id', 'url_image', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function toBeRevisionedCount()
    {
        return Announcement::where('is_accepted', null)->count(); #null perche gli annunci non sono ancora stati verificati
        
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
}
