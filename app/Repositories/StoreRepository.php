<?php

namespace App\Repositories;

use App\Models\Store;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

/**
 * @class StoreRepository
 * Classe responsável por manipular os valores do produto
 * @package Store
 * @author Higor Prado
 */
class StoreRepository
{
  protected $model;

  /**
   * Construtor da classe
   * @method __construct
   * @var Store $store
   */
  public function __construct(Store $store)
  {
    $this->store = $store;
  }

  /**
   * Método responsável por listar todos os produtos
   * @method index
   * @return array
   */
  public function index($id)
  {
    $products = DB::table('products')->where('store_id','=',$id)->get();
    $store = [
      'store' => $id,
      'products' => $products
    ];
    return response()->json($store);
  }

  /**
   * Método responsável por criar os produtos
   * @method create
   * @param object $request
   * @return array
   */
  public function create($request)
  {
    $mensagens = [
      'required' => 'Campos obrigatórios não preenchidos.',
      'name.min' => 'É necessário no mínimo 3 caracteres no nome.',
      'name.max' => 'É possível inserir até no máximo 40 caracteres no nome.',
      'email.email' => 'Digite um email válido!',
      'email.unique' => 'Digite um email válido!'
    ];

    $request->validate([
      'name' => 'required|min:3|max:40',
      'email' => 'required|email|unique:store'
    ], $mensagens);

    $store = new Store();
    $store->name = $request->name;
    $store->email = $request->email;
    $store->save();
    return response()->json($store);
  }

  /**
   * Método responsável por atualizar um produto
   * @method update
   * @param Request $request
   * @return array
   */
  public function update($request, $id)
  {

    $mensagens = [
      'required' => 'Campos obrigatórios não preenchidos.',
      'name.min' => 'É necessário no mínimo 3 caracteres no nome.',
      'name.max' => 'É possível inserir até no máximo 40 caracteres no nome.',
      'email.email' => 'Digite um email válido!',
      'email.unique' => 'Digite um email válido!'
    ];

    $request->validate([
      'name' => 'required|min:3|max:40',
      'email' => 'required|email|unique:store'
    ], $mensagens);

    $store = $this->store->find($id);

    $data = $request->all();
    $store->update($data);

    return response()->json($store);
  }

  /**
   * Método responsável por listar os produtos
   * @method delete
   * @param int $id 
   * @return array
   */
  public function delete($id)
  {
    $store = $this->store->find($id);
    $store->delete();

    return response()->json($store);
  }

  /**
   * Método responsável por listar os produtos
   * @method show
   * @param int $id 
   * @return array
   */
  public function show($id)
  {
    $store = $this->store->find($id);

    return response()->json($store);
  }
}
