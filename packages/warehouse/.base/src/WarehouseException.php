<?php

namespace Warehouse\Baseclass;

use Exception;

class WarehouseException extends Exception
{
	protected $statusCode = 500;
	protected $details;

	public function __construct(String $message, array $details = [])
	{
		parent::__construct($message);
		$this->details = $details;
	}

	public function render($request)
	{
		if ($request->expectsJson()) {
			return response()->json([
				'error' 	=> true,
				'status' 	=> $this->statusCode,
				'message' 	=> $this->message,
				'details' 	=> count($this->details) <= 0 ? null : collect($this->details)->all() ,
			], $this->statusCode);
		}
	}

	public function withStatus(int $statusCode = 500)
	{
		$this->statusCode = $statusCode;
		return $this;
	}
}
