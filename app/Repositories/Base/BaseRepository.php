<?php

namespace App\Repositories\Base;

use App\Repositories\Interfaces\Base\BaseRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class BaseRepository implements BaseRepositoryInterface
{


    /**
     * @var Model
     */
    protected Model $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return $this->model->newQuery();
    }


    /**
     * @return Collection|array
     */
    public function all(): Collection|array
    {
        return $this->query()->get();
    }


    /**
     * @param array $attributes
     * @return Model|Builder
     */
    public function create(array $attributes): Model|Builder
    {
        return $this->query()->create($attributes);
    }


    /**
     * @param array $attributes
     * @param int $id
     * @return int
     */
    public function update(array $attributes, int $id): int
    {
        return $this->query()->where('id' , $id)->update($attributes);
    }


    /**
     * @param $id
     * @return Model|Collection|Builder|array|null
     */
    public function find($id): Model|Collection|Builder|array|null
    {
        return $this->query()->find($id);
    }


    /**
     * @param $request
     * @param int $paginate
     * @param string $type
     * @return LengthAwarePaginator
     */
    public function allWithPaginate($request = null , int $paginate = 15, string $type = 'DESC'): LengthAwarePaginator
    {
        return $this->query()->paginate(request()->input('pagination') ?? $paginate);
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id): mixed
    {
        return $this->query()->where('id' , $id)->delete();
    }


    /**
     * @param string $code
     * @param array|null $attributes
     * @return Model|Builder|null
     */
    public function findByCode(string $code , ?array $attributes = null): Model|null|Builder
    {
        return $this->query()->where('code' , $code )->first($attributes);
    }




}
