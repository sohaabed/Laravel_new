<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewImage extends Model
{
    protected $fillable = [
        'image_path',
        'content_id'

    ];  
    use HasFactory;
    public function content(){
        return $this->belongsTo(Content::class);
    }
    public function getImageUrlAttribute(){
        
            return asset("storage/" . $this->image_path);
        
       
    }
}
