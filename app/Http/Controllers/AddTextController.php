<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;

class AddTextController extends Controller
{
    public function storeText(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'text_h1' => 'required|string',
            'text_p' => 'required|string',
        ]);

        // Upsert the text data
        $text = Text::updateOrCreate(
            ['id' => 1], // Assuming there is only one row in the table
            $validatedData
        );

        // Redirect or return a response
        return redirect()->back()->with('success', 'Text updated successfully.');
    }
}
