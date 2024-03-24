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


    if ($image = $request->file('product_img')) {
        $destination = 'public/assetsfront/img/';
        $image_name = time() . '_image.' . $image->getClientOriginalExtension();
        $image->move(public_path($destination), $image_name);
        $data['product_img'] = '/' . $destination . $image_name;
    }
    $data['heading'] = $request->input('heading');
    $data['description'] = $request->input('description');
    $data['facebook'] = $request->input('facebook');
    $data['instagram'] = $request->input('instagram');
    $data['twitter'] = $request->input('twitter');
    $data['youtube'] = $request->input('youtube');
    $data['products'] = $request->input('products');


    Content::create($data);

    return redirect()->route('content.index')
        ->with('success', 'content created successfully.');

    }
    public function edit(Request $request,$id)
    {

        $content = Content::find($id);
        return view('admin.content.create',compact('content'));
    }


    public function update(Request $request, $id)
    {

        $content = Content::find($id);
        $content->update($request->all());

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
