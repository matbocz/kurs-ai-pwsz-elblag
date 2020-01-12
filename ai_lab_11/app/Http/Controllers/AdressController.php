<?php

namespace App\Http\Controllers;
   
use App\Adress;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class AdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['adresses'] = Adress::orderBy('id', 'desc')->paginate(10);

        return view('adress.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adress.create');
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
            'Miasto' => 'required',
            'Ulica' => 'required',
        ]);

        Adress::create($request->all());

        return Redirect::to('adresses')
            ->with('success', 'Utworzono adres.');
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
        $data['adress_info'] = Adress::where($where)->first();

        return view('adress.edit', $data);
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
            'Miasto' => 'required',
            'Ulica' => 'required',
        ]);

        $update = ['Miasto' => $request->Miasto, 'Ulica' => $request->Ulica];
        Adress::where('id', $id)->update($update);

        return Redirect::to('adresses')
            ->with('success', 'Zaktualizowano adres.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Adress::where('id',$id)->delete();
   
        return Redirect::to('adresses')->with('success','Usunięto adres.');
    }
}
