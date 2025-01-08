<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function list()
    {
        $photo = Photo::all();
        return view('admin.gallery.photo.list', compact('photo'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'photoimg' => 'required|image|mimes:jpeg,webp,png,jpg,gif|max:2048|dimensions:width=570,height=569',
        ]);

        // Handle the file upload
        if ($request->hasFile('photoimg')) {
            $imageName = time() . '.' . $request->file('photoimg')->extension();
            $request->file('photoimg')->move(public_path('uploads/gallery'), $imageName);

            // Save image information to the database
            Photo::create([
                'photoimg' => $imageName,
            ]);
        }

        return redirect()->route('admin.gallery.photo.list')->with('success', 'Image uploaded successfully');
    }

    public function edit($id)
    {
        $photoedit = Photo::findOrFail($id);
        return view('admin.gallery.photo.edit', compact('photoedit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'photoimg'=> 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048|dimensions:width=570,height=569',
        ]);

        $photo = Photo::findOrFail($id);

        if ($request->hasFile('photoimg')) {
            // Delete the old image if it exists
            if (file_exists(public_path('uploads/gallery/'.$photo->photoimg))) {
                unlink(public_path('uploads/gallery/'.$photo->photoimg));
            }

            $imageName = time().'.'.$request->file('photoimg')->getClientOriginalExtension();
            $request->file('photoimg')->move(public_path('uploads/gallery'), $imageName);
            $photo->photoimg = $imageName;
        }
        $photo->save();

        return redirect()->route('admin.gallery.photo.list')->with('success', 'Image updated successfully.');
    }

    public function delete($id)
    {
        $photo = Photo::findOrFail($id);

        // Delete the image file from the server
        if (file_exists(public_path('uploads/gallery/'.$photo->photoimg))) {
            unlink(public_path('uploads/gallery/'.$photo->photoimg));
        }

        $photo->delete();

        return redirect()->route('admin.gallery.photo.list')->with('success', 'Image deleted successfully.');
    }
}
