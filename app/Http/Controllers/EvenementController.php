<?php

namespace App\Http\Controllers;
use App\Evenement;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenement::latest()->paginate(5);
  
        return view('evenmt.index',compact('evenements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evenmt.create');
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

        'text_desc' => 'required',
        'date_deb' => '',
        'date_fin' => '',
        'users_id'=>'',
        'image' => 'required',


        ]);
        Evenement::create($request->all());
   
        return redirect()->route('evenmt.index')
                        ->with('success','Evenement creer avec succée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evenement $evenmt
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenmt)
    {
        return view('evenmt.show',compact('evenmt'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evenement $evenmt
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenmt)
    {
        return view('evenmt.edit',compact('evenmt'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evenement $evenement
    //  * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Evenement $evenmt)
    {
        $request->validate([
            'text_desc' => 'required',
            'date_deb' => '',
            'date_fin' => '',
            'users_id'=>'',
            'image' => 'required',

        ]);
  
        $evenmt->update($request->all());

        return redirect()->route('evenmt.index')
        ->with('success','evenement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evenement  $evenmt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evenement $evenmt)
    {
        $evenmt->delete();
  
        return redirect()->route('evenmt.index')
                        ->with('success','Product deleted successfully');
    }
        /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     */

    function upload(Request $request)
    {
     $this->validate($request, [
      'image'  => 'required|image|mimes:jpg,png,gif|max:2048'
     ]);

     $image = $request->file('image');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);
     return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
    }
}
