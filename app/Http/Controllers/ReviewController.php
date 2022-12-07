<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|unique:reviews',
            'comment' => 'required|max:350'
        ]);

        $review = new Review();
        $review->name = $request->name;
        $review->email = $request->email;
        $review->review = 4;
        $review->comment = $request->comment;
        $review->save();
        return redirect()->back();
    }
}