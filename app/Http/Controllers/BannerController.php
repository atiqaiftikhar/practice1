<?php

namespace App\Http\Controllers;

use App\Models\Banner;
// use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{

    public function index()
    {
        $banner =Banner::get();
        // foreach ($banner as $banner) {
        //     $banner->image_url = Storage::url($banner->image);
        // }
        return view('admin.banner.index',compact('banner'));
    }

    public function create()
    {
       $banner=new Banner();

        return view('admin.banner.create',compact('banner'));
    }

    public function store(Request $request)
    {


    // $request->validate([
    //     'image' => 'required|image',
    //     'rank' => 'required|rank',
    //     'expiry_date' => 'required|date',
    //      'url' => 'required|url',
    // ]);
    // $imagePath = $request->file('image')->store('public/banners');
    // // $image = $request->file('image');
    // // $path = $image->store('public/assestsfront/img');
    // // $filename = basename($path);
    // $imageUrl = Storage::url($imagePath);
    if ($image = $request->file('image')) {
        $destination = 'public/assetsfront/img/'; // Adjust the destination directory
        $image_name = time() . '_image.' . $image->getClientOriginalExtension();
        $image->move(public_path($destination), $image_name); // Use public_path() to get the absolute path
        $data['image'] = '/' . $destination . $image_name;
    }
    // Banner::create([
    //     'image' => $imagePath,
    //     'rank' => $request->input('rank'),
    //     'expiry_date' => $request->input('expiry_date'),
    //     // 'url' => $request->input('url'),
    //     'url' => $imageUrl,
    // ]);
    // dd($request->all());
    $data['rank'] = $request->input('rank');
    $data['expiry_date'] = $request->input('expiry_date');
    $data['url'] = $request->input('url');
    Banner::create($data);

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
