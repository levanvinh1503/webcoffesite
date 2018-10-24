<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Validator;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function getListCategory()
    {
        $category = Category::all();
        return view('admin.category.list', compact('category'));
    }

    public function getAddCategory()
    {
        return view('admin.category.add');
    }

    public function postAddCategory(Request $requestData)
    {
        /*Check form input validate*/
        $this->validate($requestData, 
            [
                'name' => 'required|unique:category,name|max:191',
                'slug' => 'required|unique:category,slug'
            ],
            [
                'name.required' => 'Không bỏ trống tên chuyên mục',
                'name.unique' => 'Tên chuyên mục đã tồn tại',
                'name.max' => 'Tên chuyên mục tối đa 191 kí tự',
                'slug.unique' => 'Url chuyên mục đã tồn tại, vui lòng nhập lại!',
                'slug.required' => 'Không được bỏ trống url',
            ]);
        /*The category is valid...*/

        /*Create a Posts model object*/
        $newCategory = new Category();
        $newCategory->name = $requestData->input('name');
        $newCategory->slug = $requestData->input('slug');
        /*Add a new category*/
        $newCategory->save();
        return redirect()->back()->with('thanhcong', 'Thêm chuyên mục thành công');
    }

    public function getEditCategory($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function postEditCategory(Request $requestData, $id)
    {
        /*Check form input validate*/
        $validatorInput = Validator::make($requestData->all(), [
            'name' => [
                'required',
                Rule::unique('category')->ignore($id),
                'max:191'
            ],
            'slug' => [
                'required',
                Rule::unique('category')->ignore($id),
            ]
        ],
        [
            'name.required' => 'Tên chuyên mục không được bỏ trống',
            'name.unique' => 'Tên chuyên mục đã tồn tại',
            'name.max' => 'Tên chuyên mục không vượt quá 191 kí tự',
            'slug.unique' => 'Url đã tồn tại',
            'slug.required' => 'Url không được bỏ trống'
        ]);
        /*The category is valid...*/
        if ($validatorInput->passes()) {
            $categoryModel = Category::where('id', $id);
            /*Array data category*/
            $arrayData = array(
                'slug' => $requestData->input('slug'),
                'name' => $requestData->input('name')
            );
            /*Check update category*/
            if ($categoryModel->update($arrayData)) {
                return redirect()->back()->with('thanhcong', 'Sửa chuyên mục thành công'); 
            } else {
                return redirect()->back()->with('errors', 'Sửa chuyên mục thất bại');
            }
        } else {
            return redirect()->back()->with('errors', $validatorInput->errors()->all());
        }
    }
}