<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Magazine;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Video;
use App\Models\Section;

use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Storage;


class CourseController extends Controller
{

    //this function use to render paga index courses
    public function index()
    {
        $courses = Course::all();
        return view('Dashbord.Courses.index', compact('courses'));
    }
    //this function use to render paga create course
    public function create()
    {
        return view('Dashbord.Courses.create');

    }

    //this function use to create course
    public function store(Request $request)
    {

        $fileName = null;
        if($request->hasFile('photo')){
            $photoFile = $request->file('photo');
            $fileName = $photoFile->getClientOriginalName();
            Storage::putFileAs('public/courses',$photoFile, $fileName);
        }

        $course = new Course;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->photo = $fileName;
        $course->price_online = $request->price_meeting;
        $course->price_offline = $request->price_incenter;
        $course->price = $request->price_record;
        $course->save();

        return redirect()->route('course.index');
    }

// this function use to reder page show course

    public function show($id)
    {
        $course = Course::find($id);
        $sections = $course->sections;
        return view('-', compact('course', 'sections'));
    }
// this function use to render page  edit (dashbord) course

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('Dashbord.Courses.edit', compact('course'));
    }
// this function use to  edit course

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        //image
        $image = $request->photo;
        if($image){
            $image_path = public_path().'/storage/courses/'.$course->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            $image_name = time().'.'.$image->getClientoriginalExtension();
            $request->photo->move('storage/courses',$image_name);
            $course->photo = $image_name;
        }


        $course->name = $request->name;
        $course->description = $request->description;
        $course->price_online = $request->price_meeting;
        $course->price_offline = $request->price_incenter;
        $course->price = $request->price_record;
        $course->save();

        return redirect()->route('course.index');
    }
    // this function use to  delete course

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect()->route('course.index');
    }


    // front

















//    // this function use to  render page pay course
//
//
//
//    public function pay($id)
//    {
//        $course = Course::find($id);
//        return view('-', compact('course'));
//    }
//    // this function use to  handel payment
//    public function charge(Request $request, $id)
//    {
//        $course = Course::find($id);
//        $user = auth()->user();
//        try {
//            $user->newSubscription('main', $course->plan_id)->create($request->stripeToken);
//            $enrollment = new Enrollment;
//            $enrollment->user_id = $user->id;
//            $enrollment->course_id = $course->id;
//            $enrollment->enrolled_at = Carbon::now();
//            $enrollment->save();
//            return redirect()->route('courses.enroll', $course->id);
//        } catch (\Exception $ex) {
//            return redirect()->route('courses.pay', $course->id)->with('error', $ex->getMessage());
//        }
//    }
//    // this function use to  handel enrollment
//    public function enroll($id)
//    {
//        $course = Course::find($id);
//        return view('courses.enroll', compact('course'));
//    }
//    // this function use to  render page user courses
//    public function participants($id)
//    {
//        $course = Course::find($id);
//        $participants = $course->users;
//        return view('-', compact('course', 'participants'));
//    }
//
//    public function __construct()
//    {
//        $this->middleware('enrollment')->only(['enroll','sections']);
//    }
//
//
//    // other actions ...
//
//    public function enroll_function($id)
//    {
//        $course = Course::find($id);
//        $user = auth()->user();
//
//        if (!$user->subscribedToPlan($course->plan_id, 'main')) {
//            return redirect()->route('courses.index')->with('error', 'You need to subscribe to this course first');
//        }
//        $enrollment = Enrollment::firstOrCreate([
//            'user_id' => $user->id,
//            'course_id' => $course->id
//        ]);
//        return view('courses.enroll', compact('course'));
//    }
//
//    //this function use to protect pay (if user not payed and not enrollment (locked video used this))
//
//    public function section($id)
//    {
//        $course = Course::find($id);
//        $user = auth()->user();
//        if (!$user->subscribedToPlan($course->plan_id, 'main')) {
//            return redirect()->route('courses.index')->with('error', 'You need to subscribe to this course first');
//        }
//        $sections = $course->sections;
//        return view('courses.sections', compact('course', 'sections'));
//    }



}
