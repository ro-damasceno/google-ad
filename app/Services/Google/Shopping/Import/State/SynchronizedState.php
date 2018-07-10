<?php
namespace App\Services\Google\Shopping\Import\State;

class SynchronizedState extends AbstractState {

	/**
	 * Inicia o processamento dos produtos
	 *
	 * @return void
	 */
	function process () {
		// TODO: Implement process() method.
	}

	/**
	 * Inicia a sincronização dos produtos com a API do Google Shopping.
	 *
	 * @return void
	 */
	function synchronize () {
		// TODO: Implement synchronize() method.
	}

	/**
	 * Atualiza o state da importação para sincronizado.
	 *
	 * @return void
	 */
	function synchronized () {
		// TODO: Implement synchronized() method.
	}

	/**
	 * Atualiza o state da importação para falha.
	 *
	 * @return void
	 */
	function failure () {
		// TODO: Implement failure() method.
	}

	/**
	 * Cancela a importação
	 *
	 * @return void
	 */
	function cancel () {
		// TODO: Implement cancel() method.
	}

	/**
	 * Retorna a lista de erros gerados pela API do Google Shopping durante o processo de sincronização.
	 *
	 * @return array
	 */
	function getErrors (): array {
		// TODO: Implement getErrors() method.
	}
}