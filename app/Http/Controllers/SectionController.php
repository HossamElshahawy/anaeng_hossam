<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use voku\helper\ASCII;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        return view('Dashbord.Courses.Sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('Dashbord.Courses.Sections.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:50',
            'description' => 'required|string',

        ]);


        $section = new Section;

        $check = Course::findOrFail($request->course);
        if($check){
            $section->course_id = $request->course;
        }
        $section->name = $request->name;
        $section->description = $request->description;
        $section->order = $request->order;

        $section->save();

        if ($section) {
            return redirect()->route('section.index')->with('Add','تم الاضافه بنجاح');
        } else {
            return redirect()->route('section.index')->with('warning','حدث خطأ اعد المحاوله');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Section::findOrFail($id);
        $courses = Course::all();
        return view('Dashbord.Courses.Sections.edit',compact('section','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required|string|max:50',
            'description' => 'required|string',

        ]);
        $section = Section::findOrFail($id);

        $section->name = $request->name;
        $section->description = $request->description;
        $section->order = $request->order;
        $check = Course::findOrFail($request->course);
        if($check){
            $section->course_id = $request->course;
        }
        $section->save();

        if ($section) {
            return redirect()->route('section.index')->with('Add','تم التعديل بنجاح');
        } else {
            return redirect()->route('section.index')->with('warning','حدث خطأ اعد المحاوله');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();

        return redirect()->route('section.index')->with('delete','تم حذف بنجاح');
    }
}
