<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $total_user = User::get()->count();
        $total_category = Category::get()->count();
        $total_new = Content::get()->count();
        $categories = Category::all();

        $total_visit = 0;

        $visit = [];
        foreach ($categories as $category) {
            $total_visit = $total_visit + ($category->visitor);
        }
        


        return view('admin.home.index', [
            'total_user' => $total_user,
            'total_category' => $total_category,
            'total_new' => $total_new,            
            'total_visit' => $total_visit,       
            'categories' => $categories,

        ]);
    }
    
    
   
    

     
    
   
   
}
