<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deals;
use App\Models\dealsImages;
class DealsController extends Controller
{
    //

    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // adjust validation rules
    ]);

    $deal = deals::create([
        'title' => $data['title'],
        'description' => $data['description'],
    ]);

    foreach ($data['images'] as $image) {
        $path = $image->store('deal_images', 'public');
        $deal->images()->create(['path' => $path]);
    }

    return redirect()->route('dashboard')->with('success', 'Deal created successfully.');
}

}
