<?php

namespace App\Http\Controllers;
use App\Http\Requests\CareRequest;
use Illuminate\Http\Request;
use App\Models\Care;
use Illuminate\Support\Facades\File;

class CareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('isAdmin');
    }


    public function index(Request $request)
    {
        $cares = Care::where('product', 'LIKE', "%$request->search%")->get();
        
        return view(
            'cares.index',
            [
                'cares' => $cares
            ]
        );

       
    }

    public function show($id){
        // manggil data per-id (1 atau by id)
        // return $param;

        $cares = Care::where('id', $id)->first();
        return view('cares.cart', compact('cares')) ;       
    }

    public function store(CareRequest $request)
    {

        $request->image->store('imagecare');
        // tambah data / post
        $this->validate($request, [
            
            'product' => 'required',
            'price' => 'required',
            'stok' => 'required',
            'desk' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
            
        ]);

        $data = Care::create([
            'product' => $request->product,
            'price' => $request->price,
            'stok' => $request->stok,
            'desk' => $request->desk,
            'image' => $request->image
        ]);
        if($request->hasFile('image')){
            $request->file('image')->move('imagecare/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return redirect('/care');
    }

    public function create()
    {
        return view('cares.create');
    }

    public function edit($id)
    {
        $cares = Care::find($id);
        return view('cares.edit', compact('cares'));
    }

    public function update(Request $request, $id)
    {
        $data = Care::find($id);
        $data->update($request->all());
        if($request->hasFile('image')){
            $destination = 'imagecare/'.$data->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $request->file('image')->move('imagecare/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
        }
        $data->save();
        return redirect('/care')->with('success', 'Data Successfully Updated');
    }

    public function destroy($id)
    {
        $cares = Care::find($id);
        $cares->delete();


        return redirect('/care');
    }
}
