<?php

namespace App\Http\Controllers;

use App\Models\coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoffeeController extends Controller
{
    /**
    * index
    *
    * @return void
    */
    public function index()
    {
        //get coffees
        $coffees = coffee::latest()->paginate(5);

        //render view with coffee
        return view('coffees.index', compact('coffees'));
	}

    /**
     * create coffee
     *
     * @return void
     */
    public function create()
    {
        return view('coffees.create');
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
        $image->storeAs('public/coffees', $image->hashName());


        //create post
        coffee::create([
            'image'     => $image->hashName(),
            'name'      => $request->name,
            'content'   => $request->content
        ]);


        //redirect to index
        return redirect()->route('coffees.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

	   /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */

    public function edit(coffee $post)
    {
        return view('coffees.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, coffee $post)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'      => 'required|min:5',
            'content'   => 'required|min:10'
        ]);


        //check if image is uploaded
        if ($request->hasFile('image')) {


            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/coffees', $image->hashName());


            //delete old image
            Storage::delete('public/coffees/'.$post->image);


            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'name'      => $request->name,
                'content'   => $request->content
            ]);


        } else {


            //update post without image
            $post->update([
                'name'     => $request->name,
                'content'   => $request->content
            ]);
        }


        //redirect to index
        return redirect()->route('coffees.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}


