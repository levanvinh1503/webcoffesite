<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\ActiveLog;
use Auth;

class CollectionController extends Controller
{
    public function getListCollection()
    {
    	$collection = Collection::all();
    	return view('admin.collection.list', compact('collection'));
    }

    public function getAddCollection()
    {
    	return view('admin.collection.add');
    }

    public function postAddCollection(Request $requestData)
    {
    	/*Check form input validate*/
        $this->validate($requestData, 
            [
                'collection-name' => 'required|unique:collection,name|max:191',
                'collection-slug' => 'required|unique:collection,slug'
            ],
            [
                'collection-name.required' => 'Không bỏ trống tên nhóm sản phẩm',
                'collection-name.unique' => 'Tên nhóm sản phẩm đã tồn tại',
                'collection-name.max' => 'Tên nhóm sản phẩm tối đa 191 kí tự',
                'collection-slug.unique' => 'Url nhóm sản phẩm đã tồn tại, vui lòng nhập lại!',
                'collection-slug.required' => 'Không được bỏ trống url',
                
            ]);
        /*The category is valid...*/

        /*Create a Posts model object*/
        $collection = new Collection();
        $collection->name = $requestData->input('collection-name');
        $collection->slug = $requestData->input('collection-slug');
        /*Add a new category*/
        $collection->save();
        $log = new ActiveLog();
        $log->content = Auth::User()->name . " thêm nhóm sản phẩm " . $requestData->input('collection-name');
        $log->save();
        return redirect()->back()->with('thanhcong','Thêm nhóm sản phẩm thành công');
    }
}
