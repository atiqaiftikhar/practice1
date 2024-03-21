<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){

        $Homes=Home::get();
       
        return view('admin.Home.index',compact('Homes'));
}
public function create(){

    $Homes=new Home();
    return view('admin.Home.create',compact('Homes'));
}
public function store(Request $request){

    $Homes=new Home();
    $data=$request->all();
    // return $data;
    Home::create($data);
    return redirect()->route('Home.index');

}
public function edit(Request $request,$id){

    $Homes=Home::find($id);

    return view('admin.Home.create',compact('Homes'));

}
public function update(Request $request,$id){

    $Homes=Home::find($id);
    
    $data=$request->all();
    
    $Homes->update($data);
    return redirect()->route('Home.index');

}
public function delete($id){

    $Homes=Home::find($id);
    $Homes->delete();
    return redirect()->route('Home.index');

}
}
