<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GraphicModel;

class Graphics extends BaseController
{
    public function index()
    {
        $graphicModel = new GraphicModel();
        $data = 
            [
                'title' => "Graphics Card",
                'page' => "graphics",
                'list' => $graphicModel->findAll(),

            ];
        
        return view('graphics/graphics', $data);
    }

    public function search()
    {
        
        $request = service('request');
		$searchData = $request->getGet();

        $search = "";
		if (isset($searchData) && isset($searchData['search'])) {
			$search = $searchData['search'];
		}
        
        $products = new Product();

        if ($search == '') {
			$paginateData = $products->paginate(5);
		} else {
			$paginateData = $products->select('*')
				->orLike('name', $search) 			
				->paginate();
		}
        
        $data = 
        [
            "title" => "Products",
            "page" => "graphics",
            'products' => $paginateData,
			'search' => $search
            // "list" => $userModel->where('avatar', '')->find()
        ];
        return view('graphics/graphics', $data);
    }

    public function detail($nama)
    {
        $graphicModel = new GraphicModel();
        $data = 
            [
                'page' => "graphics",
                'item' => $graphicModel->where(['id_product' => $nama])->first(),

            ];
        
        return view('graphics/graphics/detail', $data);
    }
}
