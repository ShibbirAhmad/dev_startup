<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category ;

class CategoryController extends Controller
{
   
    
    public function get_categories(Request $request){
         $item = $request->item ?? 10 ;
         $categories = Category::orderBy('id','desc')->paginate($item);
         return response()->json([
             "status" => "OK",
             "categories" => $categories ,
         ]);
 } 

    // function for store category 
    public function add_category(Request $request){

         $validateData=  $this->validate($request,[
              'name' => 'required|unique:categories',
          ]);

          $category = new Category();
          $category->name=$request->name;
          if ($request->hasFile('image')) {
              $path_url=$request->file('image')->store('images/category','public');
              $category->image=$path_url ;
          }
          if ($category->save()) {
              return response()->json([
                  'status' => 'OK',
                  'message' => 'New category added',
              ]);
          }

    }



}
