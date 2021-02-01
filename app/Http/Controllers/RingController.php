<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ring;
use App\Http\Requests\RingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class RingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $rings = Ring::paginate(5);
        return view('ring.index',compact('rings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $categories)
    {
        //dd($categories->all());
        $categories = Category::all();
        return view("ring.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RingRequest $request)
    {
        //dd($request->all());
        if($request->hasfile('img')){
            $img = $request->file('img');
            $imgName = time() . '.' .$img->extension();
            $img->move(public_path('previewRings'),$imgName);

            $status = $imgName;
        }else{
            $status = null;
        }

        $request->merge(['ring_preview' => $status]);

        Ring::create($request->all());

        return redirect(route('rings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function show(Ring $ring)
    {
        return view('ring.show', [
            'ring' => $ring
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function edit(Ring $ring, Category $categories)
    {
        $categories = Category::all();
        return view('ring.edit',compact('ring','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function update(RingRequest $request, Ring $ring)
    {
        if($request->hasfile('img')){

            //Details img
            $img = $request->file('img');
            $imgName = $img->getClientOriginalName();
            
            // Create img
            $img->move(public_path('previewRings'),$imgName);
            $ring->ring_preview = $request->file('img')->getClientOriginalName();

            $status = $imgName;
        }else{
            $status = null;
        }

        $request->merge(['ring_preview' => $status]);

        $ring->update($request->all());

        return redirect(route('rings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ring::destroy($id);
        return redirect()->route('rings.index');
    }

    public function sendEmail(Request $request, Ring $ring){

        Mail::to("jhondeiber3030@gmail.com")
        ->send(new SendMail($ring));
        
        return back();
    }
}
