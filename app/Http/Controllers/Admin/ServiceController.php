<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function list()
    {
        $service= Service::all();
        return view ('admin.service.list',compact('service'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'serviceicon' => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048|dimensions:width=52,height=73',
            'servicename' => 'required',
            'servicecontent' => 'required|string|max:350',
            'serviceimage' => 'required|image|mimes:jpeg,png,webp,jpg,gif|max:2048|dimensions:width=600,height=480',
        ]);
        // Handle image upload
        $image = $request->file('serviceicon');
        $imageName1 = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/services'), $imageName1);

        // Handle image upload
        $image = $request->file('serviceimage');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/services'), $imageName);

        // Store data in database
        Service::create([
            'serviceicon' => $imageName1,
            'servicename' => $request->servicename,
            'servicecontent' => $request->servicecontent,
            'serviceimage' => $imageName,
        ]);

        return redirect()->route('admin.service.list')->with('success', 'Service details added successfully.');
    }

    public function edit($id)
    {
        $serviceedit = Service::findOrFail($id);
        return view('admin.service.edit', compact( 'serviceedit'));
    }   
    public function update(Request $request, $id)
    {
        $request->validate([
            'serviceicon'=> 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048|dimensions:width=52,height=73',
            'servicename' => 'required',
            'servicecontent' => 'required|string|max:350',
            'serviceimage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=600,height=480',
        ]);
        $service = Service::findOrFail($id);

        if ($request->hasFile('serviceicon')) {
            $image = $request->file('serviceicon');
            $imageName1 = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'), $imageName1);
            $service->serviceicon = $imageName1;
        }

        if ($request->hasFile('serviceimage')) {
            $image = $request->file('serviceimage');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'), $imageName);
            $service->serviceimage = $imageName;
        }

        $service->servicename = $request->servicename;
        $service->servicecontent = $request->servicecontent;
        $service->save();
        return redirect()->route('admin.service.list')->with('Success', 'Service details updated successfully.');
    }

    public function delete($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('admin.service.list')->with('Success', 'Service details deleted successfully.');
    }

}
