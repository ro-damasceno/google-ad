<?php
namespace App\Jobs\Google\Shopping;

use App\Contracts\Google\Shopping\ImportService;
use App\Services\Google\Shopping;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ImportProcess implements ShouldQueue {

	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	/**
	 * @var Shopping\Import\Types\Importable $importModel
	 */
	protected $importModel;

	/**
	 * Create a new job instance.
	 *
	 * @param  Shopping\Import\Types\Importable  $importModel
	 * @return void
	 */
	public function __construct(Shopping\Import\Types\Importable $importModel) {
		$this->importModel = $importModel;
	}

	/**
	 * Execute the job.
	 *
	 * @param  ImportService  $service
	 * @return void
	 */
	public function handle(ImportService $service) {}
}