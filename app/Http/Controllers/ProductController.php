<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Collection;
use Validator;
use Illuminate\Validation\Rule;
use File;
use Auth;

class ProductController extends Controller
{
    public function getListProduct()
    {
        $product = Product::all();
        return view('admin.product.list', compact('product'));
    }

    public function getAddProduct()
    {
        $collection = Collection::all();
        return view('admin.product.add', compact('collection'));
    }

    public function postAddProduct(Request $requestData)
    {
        $this->validate($requestData,
            [
                'name' => 'required|unique:post,name|max:191',
                'zip-url' => 'required',
                'image' => 'required',
            ],
            [
                'name.required' => 'Tiêu đề bài viết không được để trống',
                'name.unique' => 'Tin này đã trùng, vui lòng nhập lại',
                'zip-url.required' => 'File upload không được để trống',
                'image.required' => 'Ảnh đại diện không được để trống',
            ]);

        $requestImage = $requestData->file('image');
        $postImage = $requestImage->getClientOriginalName();
        $requestImage->move('images', $postImage);

        /*Get file name and file path*/
        $zip = $requestData->file('zip-url');
        /*Move image to folder public/images*/
        \Zipper::make($zip->getPath().'\\'.$zip->getFilename())->extractTo('extract-product');

        $product = new Product();
        $product->collection_id = $requestData->input('collection-id');
        $product->user_id = Auth::User()->id;
        $product->name = $requestData->input('name');
        $product->slug = $requestData->input('slug');
        $product->image = $postImage;
        $product->status = 0;
        /*Add a new post*/
        $product->save();

        return redirect()->back()->with('thanhcong', 'Thêm sản phẩm thành công');
    }

    public function getEditProduct($id)
    {
        $product = Product::find($id);
        $collection = Collection::all();
        return view('admin.product.edit', compact('product', 'collection'));
    }

    public function postEditProduct(Request $requestData, $id)
    {
        /*Check form input validate*/
        $validatorInput = Validator::make($requestData->all(), [
            'name' => [
                'required',
                Rule::unique('product')->ignore($id),
                'max:191'
            ],
            'slug' => [
                'required',
                Rule::unique('product')->ignore($id),
            ]
        ],
            [
                'name.required' => 'Tên sản phẩm không được để trống',
                'name.max' => 'Tên sản phẩm tối đa 191 kí tự',
                'name.unique' => 'Tên sản phẩm đã tồn tại',
                'slug.unique' => 'Đường dẫn sản phẩm đã tồn tại',
                'slug.required' => 'Đường dẫn sản phẩm không được để trống',
            ]);
        /*Check upload photos*/
        if ($requestData->file('image')) {
            /*Get file name and file path*/
            $requestImage = $requestData->file('image');
            $postImage = $requestImage->getClientOriginalName();
            /*Move image to folder public/images*/
            $requestImage->move('images', $postImage);
        } else {
            $postImage = $requestData->input('old-image');
        }
        if ($requestData->file('zip-url')) {
            /*Get file name and file path*/
            $zip = $requestData->file('zip-url');
            \Zipper::make($zip->getPath().'\\'.$zip->getFilename())->extractTo('extract-product');
        }
        /*Array of post data*/
        $arrayData = array(
            'collection_id' => $requestData->input('collection-id'),
            'user_id' => Auth::User()->id,
            'name' => $requestData->input('name'),
            'slug' => $requestData->input('slug'),
            'image' => $postImage,
            'status' => 0
        );
        /*Update post*/
        if ($validatorInput->passes()) {
            Product::where('id', $id)->update($arrayData);
            return redirect()->back()->with('thanhcong', 'Sửa sản phẩm thành công');
        } else {
            return redirect()->back()->with('errors', $validatorInput->errors()->all());
        }
    }
}
