<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags'
        ]);
        Tag::create($request->all());
        return redirect('/');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect('/');
    }

    public function testValidate()
    {
        $this->post('/tags', ['name' => ''])
            ->assertSessionHasErrors('name');
    }
}
