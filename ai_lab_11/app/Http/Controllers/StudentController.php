<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::orderBy('id', 'desc')->paginate(10);

        return view('student.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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
            'Imie' => 'required',
            'Nazwisko' => 'required',
            'adress_id' => 'required',
        ]);

        Student::create($request->all());

        return Redirect::to('students')
            ->with('success', 'Utworzono studenta.');
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
        $where = array('id' => $id);
        $data['student_info'] = Student::where($where)->first();

        return view('student.edit', $data);
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
            'Imie' => 'required',
            'Nazwisko' => 'required',
            'adress_id' => 'required',
        ]);

        $update = ['Imie' => $request->Imie, 'Nazwisko' => $request->Nazwisko, 'adress_id' => $request->adress_id];
        Student::where('id', $id)->update($update);

        return Redirect::to('students')
            ->with('success', 'Zaktualizowano studenta.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id',$id)->delete();
   
        return Redirect::to('students')->with('success','Usunięto studenta.');
    }
}
