<?php

namespace App\Http\Controllers;

use App\Models\noncoffee;
use Illuminate\Http\Request;

class NoncoffeeController extends Controller
{
    /**
    * index
    *
    * @return void
    */
    public function index()
    {
        //get noncoffees
        $noncoffees = noncoffee::latest()->paginate(5);

        //render view with noncoffee
        return view('noncoffees.index', compact('noncoffees'));
	}

    /**
     * create noncoffee
     *
     * @return void
     */
    public function create()
    {
        return view('noncoffees.create');
    }


    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'      => 'required|min:5',
            'content'   => 'required|min:10'
        ]);


        //upload image
        $image = $request->file('image');
        $image->storeAs('public/noncoffees', $image->hashName());


        //create noncoffee
        noncoffee::create([
            'image'     => $image->hashName(),
            'name'      => $request->name,
            'content'   => $request->content
        ]);


        //redirect to index
        return redirect()->route('noncoffees.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}