<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DriverModel;
use Config\Services;

class Drivers extends BaseController
{
    public function index()
    {
        $driverModel = new DriverModel();
        $data = 
            [
                'title' => "Drivers",
                'page' => "drivers",
                'list' => $driverModel->findAll(),

            ];
        
        return view('drivers', $data);
    }

    public function ajaxList()
    {
        $request = Services::request();
        $datatable = new DriverModel($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no;
                $row[] = $list->id_product;
                $row[] = $list->nama_driver;
                $row[] = $list->size_driver;
                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }
}