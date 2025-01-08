<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portrait;

class PortraitController extends Controller
{
    public function list()
    {
        $portrait = Portrait::all();
        return view('admin.gallery.portrait.list', compact('portrait'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'portimg' => 'required|image|mimes:jpeg,webp,png,jpg,gif|max:2048|dimensions:width=570,height=569',
        ]);

        // Handle the file upload
        if ($request->hasFile('portimg')) {
            $imageName = time() . '.' . $request->file('portimg')->extension();
            $request->file('portimg')->move(public_path('uploads/gallery'), $imageName);

            // Save image information to the database
            Portrait::create([
                'portimg' => $imageName,
            ]);
        }

        return redirect()->route('admin.gallery.portrait.list')->with('success', 'Image uploaded successfully');
    }

    public function edit($id)
    {
        $portedit = Portrait::findOrFail($id);
        return view('admin.gallery.portrait.edit', compact('portedit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'portimg'=> 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048|dimensions:width=570,height=569',
        ]);

        $portrait = Portrait::findOrFail($id);

        if ($request->hasFile('portimg')) {
            // Delete the old image if it exists
            if (file_exists(public_path('uploads/gallery/'.$portrait->portimg))) {
                unlink(public_path('uploads/gallery/'.$portrait->portimg));
            }

            $imageName = time().'.'.$request->file('portimg')->getClientOriginalExtension();
            $request->file('portimg')->move(public_path('uploads/gallery'), $imageName);
            $portrait->portimg = $imageName;
        }
        $portrait->save();

        return redirect()->route('admin.gallery.portrait.list')->with('success', 'Image updated successfully.');
    }

    public function delete($id)
    {
        $portrait = Portrait::findOrFail($id);

        // Delete the image file from the server
        if (file_exists(public_path('uploads/gallery/'.$portrait->portimg))) {
            unlink(public_path('uploads/gallery/'.$portrait->portimg));
        }

        $portrait->delete();

        return redirect()->route('admin.gallery.portrait.list')->with('success', 'Image deleted successfully.');
    }
}
