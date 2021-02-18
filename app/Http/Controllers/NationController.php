<?php

namespace App\Http\Controllers;

use App\Nation;
use Illuminate\Http\Request;

class NationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('nations.nav').view('nations.nations')
                ->with('nations', Nation::orderBy('population','desc')
                    ->get()
                );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nations.nav').view('nations.create');
        //->with('nations', Nation::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nation = new Nation;
        $nation->name = $request->input('name');
        $nation->population = $request->input('population');

        $nation->save();

        $request->session()->flash('message','New nation added');

        return redirect( ('nations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nation  $nation
     * @return \Illuminate\Http\Response
     */
    public function show(Nation $nation)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nation  $nation
     * @return \Illuminate\Http\Response
     */
    public function edit(Nation $nation, $id)
    {
//        $this->nation = Nation::all()->where('id', $id);


        return view('nations.edit')->with('nation', Nation::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nation  $nation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nation $nation, $id)
    {  // echo '<pre>'. print_r($request->input());
        $nation = Nation::find($id);
        $this->nation = $request->input();
      //  echo '<pre>'. $this->nation;
        $nation['name'] = $this->nation['name'];
        $nation['population'] = $this->nation['population'];

        $nation->save();

        $request->session()->flash('message','Updated successfuly');
        return redirect('nations');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nation  $nation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nation $nation, $id)
    {  echo 'here';
        Nation::destroy(array('id', $id));
        $message = 'Delete successfully';

        return  redirect('nations')->with('message',$message);
    }
}
