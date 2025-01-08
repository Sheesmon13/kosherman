<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    public function list()
    {
        $info = Info::all();
        return view('admin.info.list', compact('info'));
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'infoaddress' => 'required|string|max:300',
            'infophone' => 'required|string',
            'infoemail' => 'required|email|max:100',
        ]);
    
        // Create the about record
        Info::create([
            'infoaddress' => $request->infoaddress,
            'infophone' => $request->infophone,
            'infoemail' => $request->infoemail,
        ]);
    
        return redirect()->back()->with('success', 'Company details created successfully.');
    }
    public function edit($id)
    {
        $infoedit = Info::findOrFail($id);
        return view('admin.info.edit', compact('infoedit'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'infoaddress' => 'required|string|max:300',
            'infophone' => 'required|string',
            'infoemail' => 'required|email|max:100',
        ]);
    
        $info = Info::findOrFail($id);
    
        // Update the remaining fields
        $info->infoaddress = $request->infoaddress;
        $info->infophone = $request->infophone;
        $info->infoemail = $request->infoemail;
        $info->save();
    
        return redirect()->route('admin.info.list')->with('success', 'Company details updated successfully.');
    }
    public function delete($id)
  {
      $info = Info::findOrFail($id);
      $info->delete();
  
      return redirect()->route('admin.info.list')->with('success', 'Company details deleted successfully.');
  }
}

