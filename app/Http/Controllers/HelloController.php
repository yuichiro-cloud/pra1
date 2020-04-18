<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Item;
use App\Item;

class HelloController extends Controller
{
    public function top(Request $request)
    {
        return redirect()->route('hello.index');
        
    }
    public function index(Item $item)
    {
        $data = [
            // 'msg'=>$item = Item::find($item),
            'msg'=> Item::get(),
            
        ];
        return view('hello.index', $data);
    }
    public function show($id)
    {
        $data = [
            $item = Item::find($id),
        ];
        return view('hello.show',  ['item' => $item]);
    }
    public function create()
    {
        return view('hello.create');
    }

    public function store(Request $request)
    {
        $item = new Item;
        $item->name = $request->name;
        $item->mail = $request->mail;
        $item->age = $request->age;
        $item->save();
        return redirect('/hello');
    }
    // public function store(Request $request)
    // {
    //     $item = new Item;
    //     $form = $request->all(); 
    //     // $rules = [];
    //     unset($form['_token']);
    //     $item->name = $request->name;
    //     $item->mail = $request->mail;
    //     $item->age = $request->age;
    //     $item->save();
    //     return redirect('/hello');
    // }
    public function other(Request $request)
    {
        $data = [
            'msg'=>$request->bye,
        ];
        return view('hello.index', $data);
    }
}

// <?php


// $flights = App\Flight::all();

// foreach ($flights as $flight) {
//     echo $flight->name;
// }