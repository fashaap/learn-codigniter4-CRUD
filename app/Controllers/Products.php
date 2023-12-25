<?php

namespace App\Controllers;

class Products extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\ProductsModel();
    }

    public function index()
    {
        $data = [
            'products' => $this->model->getAllProducts()
        ];
        echo view('index', $data);
    }

    public function createProducts()
    {
        if (isset($_POST['add'])) {
            $val = $this->validate([
                'Nama_barang' => [
                    'label' => 'nama_barang',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi!!'
                    ]
                ],
                'Harga_barang' => [
                    'label' => 'Harga_barang',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi!!'
                    ]
                ],
                'Gambar_barang' => [
                    'label' => 'Gambar_barang',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi!!'
                    ]
                ],
                'Deskripsi_barang' => [
                    'label' => 'Deskripsi_barang',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi!!'
                    ]
                ],
            ]);

            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'products' => $this->model->getAllProducts()
                ];

                return redirect()->to('/products');
            } else {
                $data = [
                    'nama_barang' => $this->request->getPost('nama_barang'),
                    'Harga_barang' => $this->request->getPost('Harga_barang'),
                    'Gambar_barang' => $this->request->getPost('Gambar_barang'),
                    'Deskripsi_barang' => $this->request->getPost('Deskripsi_barang')
                ];

                $success = $this->model->updateProducts($data);
                if ($success) {
                    session()->setFlashdata('message', 'ditambahkan');
                    return redirect()->to('/products');
                }
            }
        } else {
            return redirect()->to('/products');
        }
    }

}
