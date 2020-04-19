<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
    public function top(Request $request)
    {
        return redirect()->route('hello.index');
        
    }
    public function index(Item $item)
    {
        $data = [
            'msg'=> Item::get(),
            
        ];
        return view('hello.index', $data);
    }
    public function show($id)
    {
        $data = [
            $item = Item::find($id),
            $user = Auth::user(),
        ];
        return view('hello.show',  ['item' => $item, 'user'=>$user]);
    }
    public function create()
    {
        $user = Auth::user();
        return view('hello.create', ['user'=>$user]);
    }
    
    public function store(Request $request)
    {
        $item = new Item;
        $item->name = $request->name;
        $item->text = $request->text;
        $item->user_id = $request->user_id;
        $item->save();
        return redirect('/hello');
    }

    public function edit(Request $request, $id) {
        $item = Item::find($id);
        $user = Auth::user();
        return view('hello.edit', ['item' => $item ,'user'=>$user]);
    }

    public function update(Request $request) {
        $item = Item::find($request->id);
        $item->name = $request->name;
        $item->text = $request->text;
        $item->user_id = $request->user_id;
        $item->save();
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $item = Item::find($request->id);
        $item->delete();
        return redirect('/');
    }
    public function other(Request $request)
    {
        $data = [
            'msg'=>$request->bye,
        ];
        return view('hello.index', $data);
    }
}
