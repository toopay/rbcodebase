<?php

namespace App\Http\Controllers\Admin\Actor\User;

use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Repositories\Admin\Actor\User\RoleRepository;
use App\Http\Requests\Admin\Actor\User\ManageRoleRequest;

/**
 * Class RoleTableController
 * @package App\Http\Controllers\Admin\Actor\User
 */
class RoleTableController extends Controller
{
	/**
	 * @var RoleRepository
	 */
	protected $roles;

	/**
	 * @param RoleRepository       $roles
	 */
	public function __construct(RoleRepository $roles)
	{
		$this->roles = $roles;
	}

	/**
	 * @param ManageRoleRequest $request
	 * @return mixed
	 */
	public function __invoke(ManageRoleRequest $request)
	{
		return Datatables::of($this->roles->getAll())
			->addColumn('permissions', function($role) {
				if ($role->all)
					return '<span class="label label-success">' . trans('labels.general.all') . '</span>';

				return $role->permissions->count() ?
					implode("<br/>", $role->permissions->pluck('display_name')->toArray()) :
					'<span class="label label-danger">' . trans('labels.general.none') . '</span>';
			})
			->addColumn('users', function($role) {
				return $role->users->count();
			})
			->addColumn('actions', function($role) {
				return $role->action_buttons;
			})
			->make(true);
	}
}
