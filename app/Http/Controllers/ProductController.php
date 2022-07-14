<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

/**
 * @class ProductController
 * Classe responsável retornar os produtos
 * @package Product
 * @author Higor Prado
 */
class ProductController extends Controller
{
    protected $repository;

    /**
     * Construtor da classe
     * @method __construct
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->repository = $productRepository;
    }

    /**
     * Método responsável por listar todos os produtos
     * @method index
     * @return array
     */
    public function index()
    {
        return $this->repository->index();
    }

    /**
     * Método responsável por criar os produtos
     * @method create
     * @param Request $request
     * @return array
     */
    public function create(Request $request)
    {
        return $this->repository->create($request);
    }

    /**
     * Método responsável por atualizar um produto
     * @method update
     * @param Request $request
     * @return array
     */
    public function update(Request $request, $id)
    {
        return $this->repository->update($request, $id);
    }

    /**
     * Método responsável por listar os produtos
     * @method update
     * @param string $id 
     * @param string $encryptionKey
     * @return array
     */
    public function show($id)
    {
        return $this->repository->show($id);
    }

    /**
     * Método responsável por listar os produtos
     * @method delete
     * @param int $id 
     * @return array
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
