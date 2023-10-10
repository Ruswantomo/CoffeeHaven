<?php

namespace App\Http\Controllers;

use App\Models\snack;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    /**
    * index
    *
    * @return void
    */
    public function index()
    {
        //get snacks
        $snacks = snack::latest()->paginate(5);

        //render view with snacks
        return view('snacks.index', compact('snacks'));
	}

    /**
     * create snack
     *
     * @return void
     */
    public function create()
    {
        return view('snacks.create');
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
        $image->storeAs('public/snacks', $image->hashName());


        //create post
        snack::create([
            'image'     => $image->hashName(),
            'name'      => $request->name,
            'content'   => $request->content
        ]);


        //redirect to index
        return redirect()->route('snacks.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
