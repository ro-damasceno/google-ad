<?php
namespace App\Services\Google\Shopping;

use App\Contracts\Google\Shopping\ImportService;
use App\Services\Google\AbstractGoogleService;

class GoogleShoppingService extends AbstractGoogleService implements ImportService {

	/**
	 * Importa os produtos fornecidos a API do Google Shopping.
	 *
	 * @param array $products
	 * @return void
	 */
	public function import (array $products) {
		// TODO: Implement import() method.
	}
}