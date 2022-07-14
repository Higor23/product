<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Response;

/**
 * @class ProductRepository
 * Classe responsável por manipular os valores do produto
 * @package Product
 * @author Higor Prado
 */
class ProductRepository
{
  protected $model;

  /**
   * Construtor da classe
   * @method __construct
   * @var Product $product
   */
  public function __construct(Product $product)
  {
    $this->product = $product;
  }

  /**
   * Método responsável por listar todos os produtos
   * @method index
   * @return array
   */
  public function index()
  {
    $products = $this->product->all();
    return response()->json($products);
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
      'price.min' => 'É necessário no mínimo 2 caracteres no nome.',
      'price.max' => 'É possível inserir até no máximo 6 caracteres no nome.',

    ];

    $request->validate([
      'name' => 'required|min:3|max:60',
      'price' => 'required|min:2|max:6'
    ], $mensagens);

    $product = new Product();
    $product->name = $request->name;
    $product->store_id = $request->store_id;
    $product->price = $request->price;
    $product->active = $request->active;
    $product->save();
    return response()->json($product);
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
      'price.min' => 'É necessário no mínimo 2 caracteres no nome.',
      'price.max' => 'É possível inserir até no máximo 6 caracteres no nome.',

    ];

    $request->validate([
      'name' => 'required|min:3|max:60',
      'price' => 'required|min:2|max:6'
    ], $mensagens);

    $product = $this->product->find($id);

    $data = $request->all();
    $product->update($data);

    return response()->json($product);
  }

  /**
   * Método responsável por listar os produtos
   * @method delete
   * @param int $id 
   * @return array
   */
  public function delete($id)
  {
    $product = $this->product->find($id);
    $product->delete();

    return response()->json($product);
  }

  /**
   * Método responsável por listar os produtos
   * @method show
   * @param int $id 
   * @return array
   */
  public function show($id)
  {
    $product = $this->product->find($id);

    return response()->json($product);
  }
}