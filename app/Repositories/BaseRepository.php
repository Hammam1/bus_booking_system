<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface {

	/**
	 * The repository model
	 *
	 * @var \Illuminate\Database\Eloquent\Model
	 */
	protected $model;


	/**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
	}
}
