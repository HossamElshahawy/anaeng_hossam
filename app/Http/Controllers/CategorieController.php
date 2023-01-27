<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{

    public function index()
        {
            $category =Category::all();
            return view ('Dashbord.Categorie.parts', compact('category'));
        }

    public function create()
        {
            return view('Dashbord.Categorie.add_part');
        }


    public function store(Request $request)
        {

            $request->validate([

                'name' => 'required|string|max:50',
                'image' => 'required|image|mimes:jpg,jpeg,png',

            ]);

            $fileName = null;
            if($request->hasFile('image')){
                $photoFile = $request->file('image');
                $fileName = $photoFile->getClientOriginalName();
                Storage::putFileAs('public/article/category',$photoFile, $fileName);
            }
           $category = new Category();
            $category->name = $request->name;
            $category->image = $fileName;
            $category->save();

            if ($category) {
                return redirect()->route('parts.index')->with('Add','تم الاضافه بنجاح');
            } else {
                return redirect()->route('parts.index')->with('warning','حدث خطأ اعد المحاوله');
            }
        }

        public function show()
        {

        }

    public function edit($id)
        {
            $category= Category::findOrFail($id);
            return view ('Dashbord.Categorie.edit', compact('category'));
        }

    public function update(Request $request , $id)
        {
            $request->validate([

                'name' => 'required|string|max:50',
                'image' => 'nullable|image|mimes:jpg,jpeg,png',

            ]);

            $category = Category::findOrFail($id);

            //image
            $image = $request->image;
            if($image){
                $image_path = public_path().'/article/category/'.$category->image;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
                $image_name = time().'.'.$image->getClientoriginalExtension();
                $request->image->move('article/category',$image_name);
                $category->image = $image_name;
            }
            $category->name = $request->name;
            $category->save();

            if ($category) {
                return redirect()->route('parts.index')->with('edit','تم التعديل بنجاح');
            } else {
                return redirect()->route('parts.index')->with('warning','حدث خطأ اعد المحاوله');
            }
        }

    public function destroy($id)
        {
            $category = Category::findOrFail($id);
            $image_path = public_path().'/article/category/'.$category->image;
            $image = $category->image;
            if($image){
                unlink($image_path);
            }
            $category->delete();
            return redirect()->route('parts.index')->with('delete','تم حذف بنجاح');
        }
}
