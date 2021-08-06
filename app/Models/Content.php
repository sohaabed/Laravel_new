<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'category_id',
        'slug',
        'short_description',
        'new_content',
        'image',
        'importatnt'

    ];  
    // protected $casts=[
    //     'new_content'=>'html'
    // ];
      
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function images(){
        return $this->hasMany(NewImage::class);
    }
    public function getImageUrlAttribute(){
        if($this->image){
            return asset('storage/'. $this->image);
        }
        return asset("storage\images\picture.jpg");
    }

}
