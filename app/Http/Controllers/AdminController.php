<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Category;
use App\Collection;
use App\Post;
use App\User;
use App\Product;
use Auth;

class AdminController extends Controller
{
    public function getAdmin()
    {
    	$countContact = Contact::all()->count();
    	$countCategory = Category::all()->count();
    	$countCollection = Collection::all()->count();
    	$countPost = Post::all()->count();
    	$countUser = User::all()->count();
    	$countProduct = Product::all()->count();
    	return view('admin.layout.dash-board', compact('countCategory', 'countCollection', 'countPost', 'countProduct', 'countUser', 'countContact'));
    }

    public function getMailInbox()
    {
    	$contact = Contact::orderBy('created_at','des')->get();
    	return view('admin.contact.inbox', compact('contact'));
    }

    public function getLogout()
    {
    	if(Auth::check()) 
            Auth::logout();
        return redirect()->route('home');
    }
}
