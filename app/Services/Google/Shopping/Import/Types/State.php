<?php
namespace App\Services\Google\Shopping\Import\Types;

interface State{

	/**
	 * Inicia o processamento dos produtos
	 *
	 * @return void
	 */
	function process();

	/**
	 * Inicia a sincronização dos produtos com a API do Google Shopping.
	 *
	 * @return void
	 */
	function synchronize();

	/**
	 * Atualiza o state da importação para sincronizado.
	 *
	 * @return void
	 */
	function synchronized();

	/**
	 * Atualiza o state da importação para falha.
	 *
	 * @return void
	 */
	function failure();

	/**
	 * Cancela a importação
	 *
	 * @return void
	 */
	function cancel();

	/**
	 * Retorna a lista de erros gerados pela API do Google Shopping durante o processo de sincronização.
	 *
	 * @return array
	 */
	function getErrors(): array;
}