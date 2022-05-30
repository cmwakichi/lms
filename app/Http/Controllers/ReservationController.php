<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(){
        return view('reservations.create');
    }
    public function store(Request $request, Book $book){
        $attributes = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>['required','email'],
            'tel'=>['required',],
            'from_date'=>['required'],
            'to_date'=>['required']
        ]);

        $book->reservations()->create($attributes);

        return redirect('/');
    }
    public function reserveBook($user_id, $book_id,$from_date, $to_date){
        $reservation = new Reservation();
        $book_instance = new Book();
        $user_instance = new User();

        $user = $user_instance->find($user_id);
        $book = $book_instance->find($book_id);
        $reservation->from_date = $from_date;
        $reservation->to_date = $to_date;

        $reservation->book()->associate($book);
        $reservation->user()->associate($user);
        $reservation->save();
    }
}
