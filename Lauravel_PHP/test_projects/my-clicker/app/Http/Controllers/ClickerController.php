<?php
namespace App\Http\Controllers;

use App\Models\Clicker;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    
    public function index()
    {

    }

    public function create()
    {

    }

   
    public function store(Request $request)
    {
        //store a new post
    }

    public function show(Clicker $clicker)
    {
        //show a blog post
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