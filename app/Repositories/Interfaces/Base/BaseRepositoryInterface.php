<?php

namespace App\Repositories\Interfaces\Base;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * @return Builder
     */
    public function query(): Builder;


    /**
     * @return Collection|array
     */
    public function all(): Collection|array;


    /**
     * @param array $attributes
     * @return Model|Builder
     */
    public function create(array $attributes): Model|Builder;


    /**
     * @param array $attributes
     * @param int $id
     * @return int
     */
    public function update(array $attributes, int $id): int;


    /**
     * @param $id
     * @return Model|Collection|Builder|array|null
     */
    public function find($id): Model|Collection|Builder|array|null;


    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id): mixed;



    /**
     * @param $request
     * @param int $paginate
     * @param string $type
     * @return LengthAwarePaginator
     */
    public function allWithPaginate($request = null , int $paginate = 15, string $type = 'DESC'): LengthAwarePaginator;

}
