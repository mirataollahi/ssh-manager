<?php

namespace App\Repositories\Ssh;

use App\Models\Ssh;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Interfaces\Ssh\SshRepositoryInterface;
use Illuminate\Support\Facades\Cache;
use LocalCache;

class SshRepository extends BaseRepository implements SshRepositoryInterface
{
    public function __construct(Ssh  $model)
    {
        parent::__construct($model);
    }

    /**
     * @return mixed
     */
    public function getSSHServersFromCache(): mixed
    {
        return LocalCache::get('ssh_query', function () {
            return $this->all();
        });
    }

}
