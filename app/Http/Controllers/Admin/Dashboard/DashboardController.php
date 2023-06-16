<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Dashboard\CreateSshServerRequest;
use App\Http\Requests\Admin\Dashboard\DeleteSshServerRequest;
use App\Http\Requests\Admin\Dashboard\EditSshServerRequest;
use App\Http\Requests\Admin\Dashboard\ShowSshServerRequest;
use App\Http\Requests\Admin\Dashboard\StoreSshServerRequest;
use App\Http\Requests\Admin\Dashboard\UpdateSshServerRequest;
use App\Repositories\Ssh\SshRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    protected SshRepository $sshRepository;

    public function __construct(SshRepository $sshRepository)
    {
        $this->sshRepository = $sshRepository;
    }

    /**
     * @param ShowSshServerRequest $request
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(ShowSshServerRequest $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $servers = $this->sshRepository->getSSHServersFromCache();
        return view('admin.dashboard.index' , compact('servers'));
    }

    /**
     * @param CreateSshServerRequest $request
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function create(CreateSshServerRequest $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.dashboard.form');
    }

    /**
     * @param StoreSshServerRequest $request
     * @return RedirectResponse
     */
    public function store(StoreSshServerRequest $request): RedirectResponse
    {
        $result = $this->sshRepository->create($request->toArray());
        return redirect()->back();
    }

    /**
     * @param $serverId
     * @param EditSshServerRequest $request
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function edit($serverId , EditSshServerRequest $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $server = $this->sshRepository->find($serverId);
        return view('admin.dashboard.edit' , compact('server'));
    }

    /**
     * @param $serverId
     * @param UpdateSshServerRequest $request
     * @return RedirectResponse
     */
    public function update($serverId , UpdateSshServerRequest $request): RedirectResponse
    {
        $result = $this->sshRepository->update($request->toArray() , $serverId);
        return redirect()->back();
    }

    /**
     * @param $serverId
     * @param DeleteSshServerRequest $request
     * @return RedirectResponse
     */
    public function delete($serverId , DeleteSshServerRequest $request): RedirectResponse
    {
        $result = $this->sshRepository->delete($serverId);
        return redirect()->back();
    }

}
