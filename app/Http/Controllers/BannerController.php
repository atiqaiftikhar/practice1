<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Home;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    
    public function index()
    {
        $banner =Banner::get();
        return view('admin.banner.index',compact('banner'));
    }

    public function create()
    {
       $banner=new Banner();

        return view('admin.banner.create',compact('banner'));
    }

    public function store(Request $request)
    {
        
        // Banner::create($request->all());

        // return redirect()->route('banner.index')
        //     ->with('success', 'User created successfully.');
    $request->validate([
        'image' => 'required|image',
        'rank' => 'required|integer',
        'expiry_date' => 'required|date',
        'url' => 'required|url',
    ]);

    $image = $request->file('image');
    $path = $image->store('public/assestsfront/img');
    $filename = basename($path);

    Banner::create([
        'image' => $filename, 
        'rank' => $request->input('rank'),
        'expiry_date' => $request->input('expiry_date'),
        'url' => $request->input('url'),
    ]);

    return redirect()->route('banner.index')
        ->with('success', 'Banner created successfully.');

    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('banner.edit',compact('banner'));
    }


    public function update(Request $request, $id)
    {
        
        $banner = Banner::find($id);
        $banner->update($request->all());

        return redirect()->route('banner.index')
            ->with('success', 'User updated successfully.');
    }

    
    public function delete($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }

}
