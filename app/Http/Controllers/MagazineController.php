<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class MagazineController extends Controller
{
        public  function all_admin_magazine()
        {
            $magazine = Magazine::all();
            return view('dashbord.magazine.magazine', compact('magazine'));
        }

        public  function admin_magazine()
        {
            $magazine = Magazine::all();
            return view('dashbord.magazine.create_magazine', compact('magazine'));
        }


        public function create(Request $request)
        {

            $request->validate([
                'title' => 'required|string',
                'description' => 'required',
                'photo' => 'required|image|mimes:jpg,jpeg,png',
                'link' => 'required|string',
            ]);


            $fileName = null;
            if($request->hasFile('photo')){
                $photoFile = $request->file('photo');
                $fileName = $photoFile->getClientOriginalName();
                Storage::putFileAs('public/artical',$photoFile, $fileName);
            }

            $magazine = Magazine::create ([
                'title'=>$request->title,
                'description'=>$request->description,
                'photo' => $fileName,
                'link' =>$request->link,
                ]);

            return redirect(route('all_admin_magazine'));


        }
        public function edit_page($id)
        {
            $magazine= Magazine::findOrFail($id);
            return view ('dashbord.magazine.edit_magazine', compact('magazine' , 'magazine'));
        }


        public function edit_magazen(Request $request , $id){
            $request->validate([
                'title' => 'string',
                'description',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png',
                'link' => 'string',

            ]);


            $fileName = null;
            if($request->hasFile('photo')){
                $photoFile = $request->file('photo');
                $fileName = $photoFile->getClientOriginalName();
                Storage::putFileAs('public/artical',$photoFile, $fileName);
            }


            $magazine= Magazine::findOrFail($id)->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'photo' => $fileName,
                'link' =>$request->link,
            ]);

            return redirect(route('all_admin_magazine'));
        }

    public function delete($id){
        $magazine = Magazine::findOrFail($id);
        $magazine->delete();
        return back();
    }

    public function view_all_magazine()
    {
        $magazine =Magazine::all();
        $category =Category::all();
        return view ('front.magazine.magazine', compact('magazine','category'));
    }

    public function show($id)
    {
        $magazine= Magazine::findOrFail($id);
        return view ('Front\magazine\magazine_detiles', compact('magazine'));
    }




}
