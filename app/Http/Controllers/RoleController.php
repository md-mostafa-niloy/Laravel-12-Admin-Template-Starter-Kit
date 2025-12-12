<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Role::with('permissions')->orderBy('name', 'asc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('name', fn($row) => ucfirst($row->name) ?? 'N/A')
                ->editColumn('permissions', function ($row) {
                    if ($row->permissions->isEmpty()) {
                        return '<span class="text-muted">N/A</span>';
                    }

                    return $row->permissions
                        ->pluck('name')
                        ->map(fn($permission) => '<span class="badge bg-warning">' . ucfirst($permission) . '</span>')
                        ->implode(' ');
                })
                ->filterColumn('permissions', function ($query, $keyword) {
                    $query->whereHas('permissions', function ($q) use ($keyword) {
                        $q->where('name', 'like', "%{$keyword}%");
                    });
                })
                ->addColumn('actions', function ($row) {
                    return '<div class="btn-group">
                                <a href="' . route('roles.edit', $row->id) . '"  class="btn btn-secondary btn-sm d-flex align-items-center">
                                    <i class="ph ph-pencil me-1"></i>
                                        Edit
                                </a>
                                <a href="javascript:void(0)" data-id="' . $row->id . '" class="delete btn btn-danger btn-sm d-flex align-items-center">
                                    <i class="ph ph-trash me-1"></i>
                                    Delete
                                </a>
                             </div>';
                })
                ->rawColumns(['permissions', 'actions'])
                ->make(true);
        }
        return view('user-managements.roles.index');
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('user-managements.roles.create', compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        $validated = $request->validated();
        $role = Role::create(['name' => $validated['name'], 'guard_name' => 'web']);

        $role->syncPermissions($validated['permissions']);

        return redirect()->route('roles.index')->with('success', 'Role created successfully');
    }

    public function edit(Role $role)
    {
        $role->load('permissions');
        $permissions = Permission::get();

        return view('user-managements.roles.edit', compact('role', 'permissions'));
    }

    public function update(RoleRequest $request, Role $role)
    {
        $validated = $request->validated();
//dd($validated);
        $role->update(['name' => $validated['name']]);
        $permissions = $validated['permissions'] ?? [];
        $role->syncPermissions($permissions);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully');
    }

    public function destroy(Role $role)
    {
        $role->syncPermissions([]);
        $role->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Role and its permissions have been removed successfully.'
        ]);
    }
}
