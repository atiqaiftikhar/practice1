<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    
    public function index(){

        // $events=Home::get();
       
        // return view('admin.first',compact('events'));
        return view('admin.first');
}
// public function create(){

//     $events=new Event();
//     return view('admin.event.create',compact('events'));
// }
// public function store(Request $request){

//     $events=new Event();
//     $data=$request->all();
//     // return $data;
//     Event::create($data);
//     return redirect()->route('event.index');

// }
// public function edit(Request $request,$id){

//     $events=Event::find($id);

//     return view('admin.event.create',compact('events'));

// }
// public function update(Request $request,$id){

//     $events=Event::find($id);
    
//     $data=$request->all();
    
//     $events->update($data);
//     return redirect()->route('event.index');

// }
// public function delete($id){

//     $events=Event::find($id);
//     $events->delete();
//     return redirect()->route('event.index');

// }

}
