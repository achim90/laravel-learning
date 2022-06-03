<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }

    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'string',
            'email'=>'required|email|unique:abouts',
            'password'=>'string|min:8',
            'photo'=>'nullable|string',
        ]);
        About::create($data);
        return redirect()->route('about.index');
    }

    public function show(About $about)
    {
        return view('about.show', compact('about'));
    }

    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    public function update(About $about)
    {
        $data = request()->validate([
            'name'=>'string',
            'email'=>'string',
            'password'=>'string|min:8',
            'photo'=>'string',
        ]);
        $about->update($data);
        return redirect()->route('about.index');

    }

    public function destroy(About $about)
    {

        $about->delete();
        return redirect()->route('about.index');

    }
}


