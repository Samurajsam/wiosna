<?php

namespace App\Http\Controllers;

use App\Wspolrzedne;

use Illuminate\Http\Request;

class WspolrzedneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wspolrzednes = Wspolrzedne::all();
        return view('index',compact('wspolrzednes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$wspolrzedne = $request->all();
     
        Wspolrzedne::create($wspolrzedne);*/
        $wspolrzedne = new Wspolrzedne();
        $wspolrzedne->nazwa = $request->get('nazwa');
        $wspolrzedne->wspolrzedna1 = $request->get('wspolrzedna1');
        $wspolrzedne->wspolrzedna2 = $request->get('wspolrzedna2');
        $wspolrzedne->save();

        return redirect('wspolrzednes')->with('success','Punkt został dodany');
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
        $wspolrzedne = Wspolrzedne::find($id);
        return view('edit',compact('wspolrzedne','id'));
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
        $wspolrzedne= Wspolrzedne::find($id);

        
        $wspolrzedne->nazwa = $request->get('nazwa');
        $wspolrzedne->wspolrzedna1 = $request->get('wspolrzedna1');
        $wspolrzedne->wspolrzedna2 = $request->get('wspolrzedna2');
        $wspolrzedne->save();
       

        return redirect('wspolrzednes')->with('success','Punkt został zaktualizizowany');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wspolrzedne = Wspolrzedne::find($id);
        $wspolrzedne->delete();
        return redirect('wspolrzednes')->with('success','Punkt został usunięty');
    }
}
