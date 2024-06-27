<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PhonebookController extends Controller
{
    public function home_page() {
        //$users = Phonebook::all();
        //$users = Phonebook::orderBy('name')->get();
        Paginator::useBootstrap();
        $users = Phonebook::orderBy('name')->paginate(25);
        return view('home', compact('users'));
    }

    public function search(Request $request) {
        Paginator::useBootstrap();
        $s = $request->s;
        // $users = Phonebook::where('name', 'LIKE', "%$s%")->orderBy('name')->get();
        $users = Phonebook::where('name', 'LIKE', "%$s%")->orderBy('name')->paginate(25);
        return view('home', compact('users'));
    }
}
