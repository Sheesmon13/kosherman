<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
  public function list()
    {
        $about = About::all();
        return view('admin.about.list', compact('about'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'abtitle' => 'required|string|max:100',
            'absub' => 'required|string|max:50',
            'abmainpic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=846,height=638',
            'abcontent' => 'required|string|max:900',
            'abimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=300,height=555',
        ]);
    
        // Handle the main picture upload
        $mainPicFile = $request->file('abmainpic');
        $mainPicName = time() . '_main.' . $mainPicFile->getClientOriginalExtension();
        $mainPicFile->move(public_path('uploads/about'), $mainPicName);
    
        // Handle the about image upload
        $aboutImageFile = $request->file('abimage');
        $aboutImageName = time() . '_about.' . $aboutImageFile->getClientOriginalExtension();
        $aboutImageFile->move(public_path('uploads/about'), $aboutImageName);
    
        // Create the about record
        About::create([
            'abtitle' => $request->abtitle,
            'absub' => $request->absub,
            'abmainpic' => $mainPicName,
            'abcontent' => $request->abcontent,
            'abimage' => $aboutImageName,
        ]);
    
        return redirect()->back()->with('success', 'About created successfully.');
    }
    
    public function edit($id)
    {
        $aboutedit = About::findOrFail($id);
        return view('admin.about.edit', compact('aboutedit'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'abtitle' => 'required|string|max:100',
            'absub' => 'required|string|max:50',
            'abmainpic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=846,height=638',  // Not required to allow for optional updates
            'abcontent' => 'required|string|max:900',
            'abimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=300,height=555',    // Not required to allow for optional updates
        ]);
    
        $about = About::findOrFail($id);
    
        // Handle the main picture upload
        if ($request->hasFile('abmainpic')) {
            $mainPicFile = $request->file('abmainpic');
            $mainPicName = time() . '_main.' . $mainPicFile->getClientOriginalExtension();
            $mainPicFile->move(public_path('uploads/about'), $mainPicName);
            $about->abmainpic = $mainPicName;
        }
    
        // Handle the about image upload
        if ($request->hasFile('abimage')) {
            $aboutImageFile = $request->file('abimage');
            $aboutImageName = time() . '_about.' . $aboutImageFile->getClientOriginalExtension();
            $aboutImageFile->move(public_path('uploads/about'), $aboutImageName);
            $about->abimage = $aboutImageName;
        }
    
        // Update the remaining fields
        $about->abtitle = $request->abtitle;
        $about->absub = $request->absub;
        $about->abcontent = $request->abcontent;
        $about->save();
    
        return redirect()->route('admin.about.list')->with('success', 'About updated successfully.');
    }

  public function delete($id)
  {
      $about = About::findOrFail($id);
  
      // Optionally, delete the associated images
      if (file_exists(public_path('uploads/about/' . $about->abmainpic))) {
          unlink(public_path('uploads/about/' . $about->abmainpic));
      }
      if (file_exists(public_path('uploads/about/' . $about->abimage))) {
          unlink(public_path('uploads/about/' . $about->abimage));
      }
      $about->delete();
  
      return redirect()->route('admin.about.list')->with('success', 'About deleted successfully.');
  }
}
