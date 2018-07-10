<?php
namespace App\Services\Google\Shopping\Import\State;

use App\Services\Google\Shopping;

abstract class AbstractState implements Shopping\Import\Types\State {

	public function __construct (Shopping\Import\Types\Importable $import) {}
}