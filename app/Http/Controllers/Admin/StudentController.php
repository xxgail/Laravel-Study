<?php

namespace App\Http\Controllers\Admin;

use App\Models\ModelHasPermissions;
use App\Models\Permissions;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['adminPermission'])->except('list', 'show');
    }

    public function list(Request $request){
//        return session('admin_id');
        $students = Student::query()->get()->toArray();

        return view('admin.student.index',compact('students'));
    }

    public function add(Request $request){
        if($request->post()){
            Student::query()->create([
                'name' => $request->get('name'),
                'age' => $request->get('age'),
                'gender' => $request->get('gender',1),
            ]);

            return 'success';
        }

        return view('admin.student.add');
    }

    public function edit($id,Request $request){
//        $id = $request->get('id');
        $student = Student::query()->find($id)->toArray();
        if($request->post()){
            Student::query()->where('id',$id)->update([
                'name' => $request->get('name'),
                'age' => $request->get('age'),
                'gender' => $request->get('gender',1),
            ]);

        }

//        return $student;
        return view('admin.student.edit',compact('student'));
    }
}
