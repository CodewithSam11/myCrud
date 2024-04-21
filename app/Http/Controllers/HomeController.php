<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Event\UserCreated;

class HomeController extends Controller
{
    //
    public function edit($id){
        $data =Test::find($id);
        // dd($data);
        return view('edit',compact('data'));
    }
    public function add(Request $req){
        $test = new Test();
        $test->name=  $req->name;
        $test->email = $req->email;
        $test->save();
        return redirect('home');
    }
    public function index(){
        $data =  Test::all();
        event( new UserCreated('email has been added'));
        return view('home',compact('data'));
    }
    public function destroy($id){
        $data =Test::find($id);
        // dd($data);
        $data->delete();
        return redirect('home');
    }
    // public function edit($id){
    //     return Test::find($id);
    //     // return view('edit',compact('data'));
    // }

   

    public function update(Request $request, $id){
        
        $test = Test::findOrFail($id);
        $test->name = $request->get('name');
        $test->email = $request->get('email'); 
        // dd($test);
        $test->save();
        return redirect("home");
    }
}
