<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Process the transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function perform(TransactionRequest $request)
    {
        // return response()->json($request);
        // return redirect('login');
        $request->validate([
            'id' => 'required|exists:items,id',
        ],
        [
            'id.required' => 'barang ga nemu',
            'id.exists' => 'barang ga nemu',
        ]);

        // Retrieve the item from the database
        $item = Item::findOrFail($request->id);

        // Update user balance
        $user = Auth::user();
        if($item->price > $user->balance){
            session()->flash('popup_message', 'duitnya kurang woi');
            return redirect('/')->with('success', "successfully buy flag");
        }

        $user->balance -= $item->price;
        $user->save();
        session()->flash('popup_message', $item->message);
        // return view('home.index');
        return redirect('/')->with('success', "successfully buy flag");

    }
}