<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function list()
    {
        $staff = Staff::all();
        return view('admin.staff.list', compact('staff'));
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'staffname' => 'required|string|max:255',
            'staffmail' => 'required|email',
            'staffjob'  => 'required|string|max:255',
            'staffphone'=> 'required|string|max:15',
            'staffabt'  => 'required|string',
            'staffpic'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=292,height=292',
        ]);
        $image = $request->file('staffpic');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/team'), $imageName);

        Staff::create([
            'staffname' => $request->staffname,
            'staffmail' => $request->staffmail,
            'staffjob' => $request->staffjob,
            'staffphone' => $request->staffphone,
            'staffabt' => $request->staffabt,
            'staffpic' => $imageName,
        ]);
        return redirect()->back()->with('success', 'Added team member successfully!');
    }

    public function edit($id)
    {
        $staffedit = Staff::findOrFail($id);
        return view('admin.staff.edit', compact('staffedit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'staffname' => 'required|string|max:255',
            'staffmail' => 'required|email',
            'staffjob'  => 'required|string|max:255',
            'staffphone'=> 'required|string|max:15',
            'staffabt'  => 'required|string',
            'staffpic'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=292,height=292',
        ]);
        $staff = Staff::findOrFail($id);

        if ($request->hasFile('staffpic')) {
            $image = $request->file('staffpic');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/team'), $imageName);
            $staff->staffpic = $imageName;
        }
        $staff->staffname = $request->staffname;
        $staff->staffmail = $request->staffmail;
        $staff->staffjob = $request->staffjob;
        $staff->staffphone = $request->staffphone;
        $staff->staffabt = $request->staffabt;
        $staff->save();
        return redirect()->route('admin.staff.list')->with('success', 'Team Member updated successfully.');
    }

    public function delete($id)
    {
        $staff = Staff::findOrFail($id);
        if (file_exists(public_path('uploads/team/'.$staff->staffpic))) {
            unlink(public_path('uploads/team/'.$staff->staffpic));
        }
        $staff->delete();
        return redirect()->route('admin.staff.list')->with('success', 'Staff Deleted successfully!');
    }
}