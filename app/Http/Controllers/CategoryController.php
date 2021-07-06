<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller{
/*================================create==========*/    
    public function create(){
      $categories = Category::with('children')->whereNull('parent_id')->get();

      return view('post.create')->withCategories($categories);
    }
/*================================store==========*/
public function categorystore (Request $req){
    // $session=Session::has('admin');
    // if($session){
      $validatedData = $this->validate($req, [
            'name'      => 'required|min:3|max:255|string',
            'parent_id' => 'sometimes|nullable|numeric'
      ]);
      request()->validate([
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->photo->getClientOriginalExtension();
        request()->photo->move(public_path('/image/'), $imageName);  
        Category::create([
            'photo' => $imageName,
            'tag' => $req->tag,
            'name' => $req->name,
            'price' => $req->price,
            'description' => $req->description,
            'validatedData' => $req->validatedData
        ]);
        return back()
        ->with('success','You have successfully upload image.');
    // }
}

/*================================show==========*/
    public function show($id)
    {
        //
    }
/*================================edit==========*/
    public function edit(Post $post){
          if ($post->user_id != Auth::id()) {
            return redirect()->back();
          }
          $categories = Category::with('children')->whereNull('parent_id')->get();
          return view('post.edit')->withPost($post)->withCategories($categories);
    }
/*================================update==========*/
    public function update(Request $request, Category $category)
    {
            $validatedData = $this->validate($request, [
                'name'  => 'required|min:3|max:255|string'
            ]);
    
            $category->update($validatedData);
    
            return redirect()->route('category.index')->withSuccess('You have successfully updated a Category!');
    }
/*================================destroy==========*/
    public function destroy(Category $category){
        if ($category->children) {
            foreach ($category->children()->with('posts')->get() as $child) {
                foreach ($child->posts as $post) {
                    $post->update(['category_id' => NULL]);
                }
            }
            
            $category->children()->delete();
        }

        foreach ($category->posts as $post) {
            $post->update(['category_id' => NULL]);
        }

        $category->delete();

        return redirect()->route('category.index')->withSuccess('You have successfully deleted a Category!');
    }
}
