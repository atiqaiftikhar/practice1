<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $content =Content::get();

        return view('admin.content.index',compact('content'));
    }

    public function create()
    {
       $content=new Content();

        return view('admin.content.create',compact('content'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'product_img' => 'required|image', // Validate image file
            'heading' => 'required|string',
            'description' => 'required|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'youtube' => 'nullable|url',
            'products' => 'nullable|string',
        ]);

        // Process image upload if present
        if ($image = $request->file('product_img')) {
            $destination = 'public/assetsfront/img/';
            $image_name = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path($destination), $image_name);
            $data['product_img'] = '/' . $destination . $image_name;
        }

        // Create content data array
        $data['heading'] = $request->input('heading');
        $data['description'] = $request->input('description');
        $data['facebook'] = $request->input('facebook');
        $data['instagram'] = $request->input('instagram');
        $data['twitter'] = $request->input('twitter');
        $data['youtube'] = $request->input('youtube');
        $data['products'] = $request->input('products');

        // Create a new Content model instance and save it
        Content::create($data);

        // Redirect back to the index page with success message
        return redirect()->route('content.index')
            ->with('success', 'Content created successfully.');
    }
    public function edit(Request $request,$id)
    {

        $content = Content::find($id);
        return view('admin.content.create',compact('content'));
    }


    public function update(Request $request, $id)
    {

        $content = Content::find($id);

    // Update content attributes
    $content->heading = $request->input('heading');
    $content->description = $request->input('description');
    $content->facebook = $request->input('facebook');
    $content->instagram = $request->input('instagram');
    $content->twitter = $request->input('twitter');
    $content->youtube = $request->input('youtube');
    $content->products = $request->input('products');

    // Save changes to the content attributes
    $content->save();

    // Check if a new image file is uploaded
    if ($image = $request->file('product_img')) {
        $destination = 'public/assetsfront/img/';
        $image_name = time() . '_image.' . $image->getClientOriginalExtension();
        $image->move(public_path($destination), $image_name);
        $content->product_img = '/' . $destination . $image_name;
        $content->save(); // Save the updated content with the new image path
    }


        return redirect()->route('content.index')
            ->with('success', 'content updated successfully.');
    }


    public function delete($id)
    {

    $content=Content::find($id);
    $content->delete();
    return redirect()->route('content.index');

    }
}
