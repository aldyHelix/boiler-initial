<?php
namespace App\Services;

use Illuminate\Http\Request;

class CategoryService {
	public function insertCategory($request){
		$data = $request->all();
        $path = 'images/category';
        $do_upload = imageUpload($data['image'], $path ,'public');

        if(!$do_upload){
            abort(500, 'Failed upload image');
        } else {
            $data['category_image'] = $do_upload;
        }

        unset($data['image']);

        foreach ($data as $key => $value){ $category[$key] = $value; }

        return $category;
	}
}
