<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class publisherController extends Controller
{
    //
    public function create(){
        return view('addPublisher');
    }

    public function storePublisher(Request $request){
        #pake email validate buat tipe nya email, dns biar dia valid cth @gmail.com, dll
        $request->validate([
            'publisherName' => 'required|unique:publishers,publisherName|min:5|max:20|email:dns',
            'image' => 'required|file|max:30000|mimes:png,jpg'
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->publisherName.'.'.$extension;
        $request->file('image')->storeAs('/public/publishers/', $filename);

        Publisher::create([
            'publisherName' => $request->publisherName,
            'image' => $filename,
        ]);

        return redirect(route('homepage'));
    }

    public function showPublisher(){
        $tetew = Publisher::all();
        return view('showPublisher')->with('publishers', $tetew);
    }

    public function detail($id){
        $publisher = Publisher::findOrFail($id);

        return view('publisherDetail')->with('publisher', $publisher);
    }

    public function updatePublisher($id, Request $request){
        $publisher = Publisher::findOrFail($id)->update([
            'publisherName' => $request->publisher,
        ]);
        
        return redirect(route('showPublisher'));
    }

    public function edit($id){
        $publisher = Publisher::findOrFail($id);

        return view('updatePublisher')->with('publisher', $publisher);
    }

    public function deletePublisher($id){
        Publisher::destroy($id);
        return redirect(route('showPublisher'));
    }
}
