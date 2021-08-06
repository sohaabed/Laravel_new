<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Content;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::user()->id;
       $contents=User::find($user_id)->contents()->get();
        $total_category = Category::get()->count();
        $total_new = User::find($user_id)->contents()->get()->count();
        $categories = Category::all();

        $total_visit = 0;

       
        foreach ($contents as $content) {
            $total_visit = $total_visit + ($content->visitor);
        }
        


        return view('user.home.index', [
            
            'total_category' => $total_category,
            'total_new' => $total_new,            
            'total_visit' => $total_visit,       
            'categories' => $categories,

        ]);
    }
    
    
   
    

     
    
   
   
}
