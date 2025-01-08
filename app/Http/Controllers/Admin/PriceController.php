<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PriceController extends Controller
{
    public function index()
    {
        $price = Price::all();
        return view('admin.price.index', compact('price'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'pricehead' => 'required|string|max:25',
            'priceplan' => 'required|string|max:15',
            'pricesub' => 'required|string|max:255',
        ]);

        Price::create([
            'pricehead' => $request->pricehead,
            'priceplan' => $request->priceplan,
            'pricesub' => $request->pricesub,
        ]);
        return redirect()->route('admin.price.index')->with('success', 'Pricing Plan created successfully!');
    }

    public function edit($id)
    {
        $priceedit = Price::findOrFail($id);
        return view('admin.price.edit', compact('priceedit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pricehead' => 'required|string|max:25',
            'priceplan' => 'required|string|max:15',
            'pricesub' => 'required|string|max:255',
        ]);
        $price = Price::findOrFail($id);

        $price->pricehead = $request->pricehead;
        $price->priceplan = $request->priceplan;
        $price->pricesub = $request->pricesub;
        $price->save();
        return redirect()->route('admin.price.index')->with('success', 'Pricing Plan updated successfully.');
    }

    // Delete the specified Price
    public function delete($id)
    {
        $price = Price::find($id);
        $price->delete();
            return redirect()->route('admin.price.index')->with('success', 'Pricing plan deleted successfully.');
    }
}
