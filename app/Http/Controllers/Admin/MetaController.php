<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MetaController extends Controller
{
    public function Home()
    {
        $data = Home::all();
        return view('admin.metadata.home.index', compact('data'));
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'keywords' => 'required|string',
            'description' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Save student data to database
        Home::create([
            'title' => $request->title,
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Record created successfully.');
    }

    public function Editpage(Request $request, $id)
    {
        $data = Home::find($id);
        return view('admin.metadata.home.editmeta', compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'keywords' => 'required|string',     
            'description' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Home::find($id);
        
        $data->Update([
            'title' => $request->title,
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);
        return redirect(route('Home'))->with('success', ' updated successfully.'); 
    }

    public function Delete(Request $request,$id)
    {
        Home::find($id)->delete();
        return redirect()->back()->with('success', ' Deleted successfully.');
    }

  

    public function PageMeta($page)
    {
        // Fetch metadata for the page
        $metaData = Home::where('title', strtoupper($page))->first();

        if (!$metaData) {
            abort(404, 'Metadata not found for this page.');
        }

        // Determine the view name based on the page
        $viewName = 'guest.pages.' . strtolower($page);

        // Ensure the view exists
        if (!view()->exists($viewName)) {
            abort(404, 'Page not found.');
        }

        return view($viewName, [
            'meta' => $metaData,
        ]);
    }
 

}
