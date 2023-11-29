<?php

namespace App\Http\Controllers;

use App\Models\Clicker;
use Illuminate\Http\Request;

class ClickerController extends Controller
{
    
    public function index()
    {
        $clicks = Clicker::all();
        return view('clicks.index', [
            'clicks' => $clicks,
        ]);
    }

    public function create()
    {
        return view('clicks.create');
    }

   
    public function store(Request $request)
    {
        $newClick = Clicker::create([
            'title' => $request->title,
            'startCount' => $request->startCount,
            'clicks' => $request->clicks,                
            'endCount' => $request->endCount
        ]);

        return redirect('clicks/' . $newClick->id);
    }

    public function show(Clicker $clicker)
    {
        return view('clicks.show', [
            'click' => $clicker,
        ]);
    }

    
    public function edit(Clicker $clicker)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, Clicker $clicker)
    {
        //save the edited post
    }

    
    public function destroy(Clicker $clicker)
    {
        //delete a post
    }
}