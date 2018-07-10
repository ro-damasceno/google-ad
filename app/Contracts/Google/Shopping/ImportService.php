<?php
namespace App\Contracts\Google\Shopping;

interface ImportService{

	/**
	 * Importa os produtos fornecidos a API do Google Shopping.
	 *
	 * @param array $products
	 * @return void
	 */
	public function import(array $products);
}