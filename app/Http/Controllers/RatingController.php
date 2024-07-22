<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;

class RatingController extends Controller
{
    public function post_rate(Request $request, $id)
    {

        if (Auth::user()->is_admin) {

            return redirect()->back()->with('error', 'Администраторы не могут оставлять отзывы.');
        }

        $send_comment = Product::findOrFail($id);

        $user = Auth::user();


        $rating = $request->input('rating');
        $comment = $request->input('comment');
        $name = $user->name;
        $date_send_rating = date('Y-m-d');



        $existingRatings = $send_comment->rating ? explode(',', $send_comment->rating) : [];
        $existingNames = explode(',', $send_comment->name);
        $existingComments = explode(',', $send_comment->comment);
        $existingDateSendRatings = $send_comment->date_send_rating ? explode(',', $send_comment->date_send_rating) : [];


        $existingNames[] = $name;
        $existingComments[] = $comment;
        $existingRatings[] = $rating;
        $existingDateSendRatings[] = $date_send_rating;



        $send_comment->ratings()->create([
            'rating' => $rating,
            'name' => implode(',', $existingNames),
            'comment' => implode(',', $existingComments)
        ]);



        $send_comment->average_rating = round($send_comment->averageRating(), 1);


        $existingRatings = array_filter($existingRatings);
        $send_comment->rating = implode(',', $existingRatings);

        $existingNames = array_filter($existingNames);
        $send_comment->name = implode(',', $existingNames);

        $existingComments = array_filter($existingComments);
        $send_comment->comment = implode(',', $existingComments);

        $existingDateSendRatings = array_filter($existingDateSendRatings);
        $send_comment->date_send_rating = implode(',', $existingDateSendRatings);

        $send_comment->count_send = count($existingRatings);

        $send_comment->save();


        return redirect()->back();
    }
}
