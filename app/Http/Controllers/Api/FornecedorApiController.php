<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Fornecedor;

class FornecedorApiController extends MasterApiController
{
    protected $model;
    protected $path = '';
    protected $upload = '';
    protected $width = 177;
    protected $height = 236;
    protected $totalPage = 20;

    public function __construct(Fornecedor $fornecedor, Request $request)
    {
        $this->model = $fornecedor;
        $this->request = $request;
    }

    public function destroy($id)
    {
        if ($data = $this->model->find($id)) {
            $data->delete();
            return response()->json(['success' => 'Deletado com sucesso!']);
            
        } else {
            return response()->json(['error' => 'Nada foi encontrado!'], 404);
        }
    }
}
