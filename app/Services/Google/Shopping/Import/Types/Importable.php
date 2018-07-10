<?php
namespace App\Services\Google\Shopping\Import\Types;

interface Importable {

	/**
	 * Retorna o state atual da importação
	 *
	 * @return State
	*/
	public function getCurrentState();

	/**
	 * Atualiza o state da importação
	 *
	 * @param State $state
	 * @return void
	 */
	public function setCurrentState(State $state);
}