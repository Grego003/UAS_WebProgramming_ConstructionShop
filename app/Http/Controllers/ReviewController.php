<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|unique:reviews',
            'comment' => 'required|max:350',
            'review' => 'required|min:1|max:5|numeric'
        ]);

        $review = new Review();
        $review->name = $request->name;
        $review->email = $request->email;
        $review->review = $request->review;
        $review->comment = $request->comment;
        $review->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        if (!Gate::allows('only_admin')) {
            abort(403);
        }
        $product = Review::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
