<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\StoreRepository;

/**
 * @class StoreController
 * Classe responsável retornar as lojas
 * @package StoreController
 * @author Higor Prado
 */
class StoreController extends Controller
{
    protected $repository;

    /**
     * Construtor da classe
     * @method __construct
     */
    public function __construct(StoreRepository $storeRepository)
    {
        $this->repository = $storeRepository;
    }

    /**
     * Método responsável por listar todas as lojas
     * @method index
     * @return array
     */
    public function index($id)
    {
        return $this->repository->index($id);
    }

    /**
     * Método responsável por criar as loja
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
     * Método responsável por listar as lojas
     * @method update
     * @param string $id 
     * @return array
     */
    public function show($id)
    {
        return $this->repository->show($id);
    }

    /**
     * Método responsável por listar as lojas
     * @method delete
     * @param int $id 
     * @return array
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
