<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddGuardRequest;
use App\Http\Requests\DeleteGuardRequest;
use App\Repositories\Guard\GuardRepository;

class GuardController extends Controller
{
    protected $guardRepository;

    /**
     * Initialize the repository used by the controller.
     * The repository handles database processes
     *
     * ScheduleController constructor.
     * @param GuardRepository $guardRepository
     */
    public function __construct(GuardRepository $guardRepository)
    {
        $this->guardRepository = $guardRepository;
    }

    /**
     * Display the guard management page.
     *
     * @throws \Throwable
     */
    public function index()
    {
        $guards = $this->guardRepository->all();

        return view('guard.index', [
            'guards' => $guards,
        ])->render();
    }

    /**
     * Store a newly created guard.
     *
     * @param AddGuardRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AddGuardRequest $request)
    {
        $this->guardRepository->createGuard([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'color_indicator' => $request->get('color_indicator'),
        ]);

        return redirect()
            ->route('guard-manage')
            ->with('save_success', 'Guard successfully added.');
    }

    /**
     * Delete a guard and all his schedules.
     *
     * @param DeleteGuardRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(DeleteGuardRequest $request)
    {
        $guardId = $request->get('guard_id');
        $this->guardRepository->deleteGuardById($guardId);

        return redirect()
            ->route('guard-manage')
            ->with('delete_success', 'Guard successfully deleted.');
    }

}
