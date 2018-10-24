<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Category;
use App\Contact;
use App\Post;
use App\Product;
use App\Collection;
use Hash;

class PageController extends Controller
{
    public function getHome()
    {
        $product = Product::paginate(6);
    	return view('front.page.home', compact('product'));
    }

    public function getLogin()
    {
    	return view('front.login.login');
    }

    public function postLogin(Request $requestData)
    {
    	/*Check form input validate*/
        $this->validate($requestData, 
            [
                'username-login' => 'required|min:5|max:191',
                'password-login' => 'required|min:8|max:191'
            ],
            [
                'username-login.required' => 'Tên đăng nhập không được bỏ trống',
                'username-login.min' => 'Tên đăng nhập phải lớn hơn 5 kí tự',
                'username-login.max' => 'Tên đăng nhập tối đa 191 kí tự',
                'password-login.required' => 'Mật khẩu không được bỏ trống',
                'password-login.min' => 'Mật khẩu phải lớn hơn 8 kí tự',
                'password-login.max' => 'Mật khẩu tối đa 191 kí tự'
            ]);
        /*The username and password is valid...*/

        $username = $requestData->input('username-login');
        $password = $requestData->input('password-login');
        /*Check login with username and password*/
        if (Auth::attempt(['username' => $username, 'password' => $password, 'status' => 1])) {
            $user = User::where('username', $username)->first();
            if ($user->role == 1 || $user->role == 2) {
                return redirect()->route('indexadmin');
            } else {
                $msg = new MessageBag(['errlogin'=> 'Bạn không có quyền đăng nhập']);
                return redirect()->back()->withErrors($msg);
            }
        } else {
            $msg = new MessageBag(['errlogin'=> 'Sai thông tin đăng nhập.']);
            return redirect()->back()->withErrors($msg);
        }
    }

    public function getRegister()
    {
    	return view('front.login.register');
    }

    public function postRegister(Request $requestData)
    {
        $user = new User();
        $user->username = $requestData->input('username');
        $user->name = $requestData->input('name');
        $user->email = $requestData->input('email');
        $user->password = Hash::make($requestData->input('password'));
        $user->phone = $requestData->input('phone');
        $user->address = $requestData->input('address');
        $user->role = 4;
        $user->save();
    }

    public function getServices()
    {
        return view('front.page.services');
    }

    public function getAboutUs()
    {
        return view('front.page.about');
    }

    public function getCollection()
    {
        $collection = Collection::all();
        $product = Product::all();
        return view('front.collection.list', compact('product', 'collection'));
    }

    public function getCategory($slug)
    {
        $category = Category::all();
        $thisCategory = Category::where('slug', $slug)->first();
        $post = Post::where('category_id', $thisCategory->id)
            ->orderBy('created_at','des')
            ->get();
        return view('front.category.list', compact('category', 'post', 'thisCategory'));
    }

    public function getPost($slug)
    {
        $category = Category::all();
        $arrayPost = Post::where('slug', $slug)->first();
        /*Increase post views*/
        $arrayPost->view = $arrayPost->view + 1;
        $arrayPost->save();
        /*List of related post*/
        $arrayPostOther = Post::where('slug', '!=', $arrayPost->slug)
            ->where('category_id', $arrayPost->category_id)
            ->get();
        return view('front.post.detail', compact('arrayPost', 'arrayPostOther', 'category'));
    }

    public function getContact()
    {
        return view('front.page.contact');
    }

    public function postContact(Request $requestData)
    {
        $contact = new Contact();
        $contact->title = $requestData->input('title');
        $contact->email = $requestData->input('email');
        $contact->name = $requestData->input('name');
        $contact->phone = $requestData->input('phone');
        $contact->content = $requestData->get('message');
        $contact->save();
        return redirect()->back()->with('thanhcong','Cảm ơn bạn đã gửi liên hệ với chúng tôi ! Chúng tôi sẽ sớm liên lạc với bạn !');
    }
}
