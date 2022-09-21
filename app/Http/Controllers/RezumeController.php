<?php

namespace App\Http\Controllers;

use App\Models\Rezume;
use Faker\Provider\PhoneNumber;
use Illuminate\Http\Request;

class RezumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rezume = Rezume::orderByDesc('created_at')->get();
        return view('dashboard',[
        'resume' => $rezume,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('rezume.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' =>'bail|required|min:3',
            'email' => 'required',
            'phone' => 'required',
            'message' =>'required'

        ]);
        $rezume = new Rezume();
        $rezume->name = $request['name'];
        $rezume->email = $request['email'];
        $rezume->phone = $request['phone'];
        $rezume->message = $request['message'];
        $rezume->save();
//        dd($rezume);
        return redirect()->route('rezume.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rezume=Request::find($id);
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezume $rezume)
    {
        return view('rezume.edit', [
            'rezume'=>$rezume
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($resume)
    {
        $d=Rezume::find($resume);
        $d->delete();


        return redirect()->route('rezume.index');
    }
}
