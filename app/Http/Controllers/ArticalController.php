<?php

namespace App\Http\Controllers;
use App\Models\Artical;
use App\Models\Category;
use App\Models\Course;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Validator;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Storage;


class ArticalController extends Controller
{

    public function index()
    {
        $articles = Artical::all();
        return view('dashbord.artical.artical', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashbord.artical.add_artical', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpg,jpeg,png',
            'tag1' => 'nullable|string|max:200',
            'tag2' => 'nullable|string|max:200',
            'tag3' => 'nullable|string|max:200',
//                'category_ids'=> 'required',
//               'category_ids.*'=> 'exists :categories,id'
        ]);

        $fileName = null;
        if ($request->hasFile('img')) {
            $photoFile = $request->file('img');
            $fileName = $photoFile->getClientOriginalName();
            Storage::putFileAs('public/article', $photoFile, $fileName);
        }

        $article = new Artical();
        $check = Category::findOrFail($request->category);
        if ($check) {
            $article->category_id = $request->category;
        }
        $article->title = $request->title;
        $article->description = $request->description;
        $article->img = $fileName;
        $article->tag1 = $request->tag1;
        $article->tag2 = $request->tag2;
        $article->tag3 = $request->tag3;
        $article->save();

        return redirect()->route('article.index');
    }

    public function edit($id)
    {

        $article = Artical::findOrFail($id);
        $categories = Category::all();
        return view('dashbord.artical.edit_artical', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable|string|max:100',
            'content' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
            'tag1' => 'nullable|string|max:200',
            'tag2' => 'nullable|string|max:200',
            'tag3' => 'nullable|string|max:200',
//               'category_ids'=> 'required',
//                'category_ids.*'=> 'exists :categories,id'
        ]);

        $article = Artical::findOrFail($id);

        //image
        $image = $request->photo;
        if($image){
            $image_path = public_path().'/storage/article/'.$article->img;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            $image_name = time().'.'.$image->getClientoriginalExtension();
            $request->photo->move('storage/article',$image_name);
            $article->img = $image_name;
        }


        $check = Category::findOrFail($request->category);
        if ($check) {
            $article->category_id = $request->category;
        }
        $article->title = $request->title;
        $article->description = $request->description;
        $article->tag1 = $request->tag1;
        $article->tag2 = $request->tag2;
        $article->tag3 = $request->tag3;
        $article->save();

        return redirect()->route('article.index');






////
////        {
////            $requestData = $request->all();
////            $fileName = time().$request->file('img')->getClientOriginalName();
////            $path = $request->file('img')->storeAs('artical', $fileName, 'public');
////            $requestData["img"] = '/storage/'.$path;
////        }
//
//        $articals = Artical::findOrFail($id)->update([
//            'title' => $request->title,
//            'description' => $request->description,
//            'img' => $request->img,
//            'tag1' => $request->tag1,
//            'tag2' => $request->tag2,
//            'tag3' => $request->tag3,
//        ]);
//        return redirect(route('artical', $id));
    }

    public function delete($id)
    {
        $articals = Artical::findOrFail($id);
        $articals->categories()->sync([]);
        $articals->delete();
        return back();
    }

    public function view_all_artical()
    {
        $artical =Artical::all();
        $category =Category::all();
        return view ('front.artical.blogs', compact('artical','category'));
    }
    public function show($id)
    {
        $artical= Artical::findOrFail($id);
        return view ('Front\artical\blog-details', compact('artical'));
    }


    public function last_artical()
    {
        $artical=Artical::orderBY ('id')-> paginate(3);
        return view ('Front.artical.blog-details', compact('artical'));
    }
    public function show_artical($id)
    {
        $artical= Artical::findOrFail($id);
        return view ('Front\artical\blog-details', compact('artical'));
    }







}
