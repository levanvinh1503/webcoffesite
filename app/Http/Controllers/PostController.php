<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Post;
use App\Category;
use Validator;
use Auth;
use App\ActiveLog;

class PostController extends Controller
{
    public function getListPost()
    {
    	$post = Post::all();
    	return view('admin.post.list', compact('post'));
    }

    public function getAddPost()
    {
    	$categoryModel = Category::all();
    	return view('admin.post.add', compact('categoryModel'));
    }

    public function postAddPost(Request $requestData)
    {
        /*Check form input validate*/
        $this->validate($requestData, 
            [
                'name' => 'required|unique:post,name|max:191',
                'slug' => 'required|unique:post,slug',
                'description' => 'required',
                'image' => 'required|max:191',
            ],
            [
                'name.required' => 'Tiêu đề bài viết không được để trống',
                'name.max' => 'Tiêu đề bài viết tối đa 191 kí tự',
                'name.unique' => 'Tin này đã trùng, vui lòng nhập lại',
                'slug.unique' => 'Url này đã trùng, vui lòng nhập lại',
                'slug.required' => 'Đường dẫn bài viết không được để trống',
                'description.required' => 'Mô tả ngắn bài viết không được để trống',
                'image.required' => 'Ảnh đại diện không được bỏ trống',
                'image.max' => 'Tên file ảnh tối đa 191 kí tự',
            ]);
        /*The blog post is valid...*/

        /*Get file name and file path*/
        $requestImage = $requestData->file('image');
        $postImage = $requestImage->getClientOriginalName();
        /*Move image to folder public/images*/
        $requestImage->move('images',$postImage);

        /*Create a Posts model object*/
        $newPost = new Post();
        $newPost->category_id = $requestData->input('post-category');
        $newPost->user_id = Auth::User()->id;
        $newPost->name = $requestData->input('name');
        $newPost->description = $requestData->input('description');
        $newPost->slug = $requestData->input('slug');
        $newPost->content = $requestData->input('content');
        $newPost->image = $postImage;
        $newPost->view = 0;
        $newPost->status = 0;
        /*Add a new post*/
        $newPost->save();

        $log = new ActiveLog();
        $log->content = Auth::User()->name . " thêm bài viết " . $requestData->input('name');
        $log->save();

        return redirect()->back()->with('thanhcong','Thêm bài viết thành công');
    }

    public function getEditPost($id)
    {
        $post = Post::find($id);
        $category = Category::all();
        return view('admin.post.edit', compact('post', 'category'));
    }

    public function postEditPost(Request $requestData, $id)
    {
        /*Check form input validate*/
        $validatorInput = Validator::make($requestData->all(), [
            'name' => [
                'required',
                Rule::unique('post')->ignore($id),
                'max:191'
            ],
            'slug' => [
                'required',
                Rule::unique('post')->ignore($id),
            ]
        ],
        [
            'name.required' => 'Tiêu đề bài viết không được để trống',
            'name.max' => 'Tiêu đề bài viết tối đa 191 kí tự',
            'name.unique' => 'Tiêu đề đã tồn tại',
            'slug.unique' => 'Url đã tồn tại',
            'slug.required' => 'Đường dẫn bài viết không được để trống',
        ]);
        /*Check upload photos*/
        if ($requestData->file('image')) {
            /*Get file name and file path*/
            $requestImage = $requestData->file('image');
            $postImage = $requestImage->getClientOriginalName();
            /*Move image to folder public/images*/
            $requestImage->move('images',$postImage);
        } else {
            $postImage = $requestData->input('old-image');
        }
        /*Array of post data*/
        $arrayData = array(
            'category_id' => $requestData->input('post-category-update'),
            'user_id' => Auth::User()->id,
            'name' => $requestData->input('name'),
            'description' => $requestData->input('description'),
            'slug' => $requestData->input('slug'),
            'content' => $requestData->input('content'),
            'image' => $postImage,
        );
        /*Update post*/
        if ($validatorInput->passes()) {
            Post::where('id', $id)->update($arrayData);
            $log = new ActiveLog();
            $log->content = Auth::User()->name . " chỉnh sửa bài viết " . $requestData->input('name');
            $log->save();
            return redirect()->back()->with('thanhcong','Sửa bài viết thành công');
        } else {
            return redirect()->back()->with('errors', $validatorInput->errors()->all());
        }
    }
}
