<?php
namespace App\Services\Google\Shopping\Import;

use Illuminate\Database\Eloquent\Model;

class ImportModel extends Model implements Types\Importable {

	protected $_state;

	/**
	 * Retorna o state atual da importação
	 *
	 * @return Types\State
	 */
	public function getCurrentState () {
		return $this->_state;
	}

	/**
	 * Atualiza o state da importação
	 *
	 * @param Types\State $state
	 * @return void
	 */
	public function setCurrentState (Types\State $state) {
		$this->_state = $state;
	}
}