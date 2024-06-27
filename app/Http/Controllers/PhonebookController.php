<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function home_page() {
        //$users = Phonebook::all();
        //$users = Phonebook::orderBy('name')->get();
        $users = Phonebook::orderBy('name')->simplepaginate(25);
        return view('home', compact('users'));
    }
}
