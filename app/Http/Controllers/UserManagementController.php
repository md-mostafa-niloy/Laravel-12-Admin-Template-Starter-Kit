<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UserManagementController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('roles');

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('name', fn($row) => $row->name ?? 'N/A')
                ->editColumn('email', fn($row) => $row->email ?? 'N/A')
                ->editColumn('roles', function ($row) {
                    return $row->roles
                        ->pluck('name')
                        ->map(fn($role) => ucfirst($role))
                        ->implode(', ');
                })
                ->filterColumn('roles', function ($query, $keyword) {
                    $query->whereHas('roles', function ($q) use ($keyword) {
                        $q->where('name', 'like', "%{$keyword}%");
                    });
                })
                ->editColumn('created_at', fn($row) => $row->created_at->format('d-m-Y (h:i A)'))
                ->editColumn('email_verified_at', fn($row) => $row->email_verified_at?->format('d-m-Y (h:i A)') ?? 'N/A')
                ->addColumn('actions', function ($row) {
                    return '<div class="btn-group">
                                <a href="javascript:void(0)" data-id="' . $row->id . '" class="editUserBtn btn btn-secondary btn-sm d-flex align-items-center">
                                    <i class="ph ph-pencil me-1"></i>
                                    Edit
                                </a>
                                <a href="javascript:void(0)" data-id="' . $row->id . '" class="delete btn btn-danger btn-sm d-flex align-items-center">
                                    <i class="ph ph-trash me-1"></i>
                                    Delete
                                </a>
                            </div>';
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('user-managements.users.index');
    }

    public function create()
    {
        $roles = Role::orderBy('name', 'asc')->get();
        return view('components.user-managements.users.add-modal', compact('roles'));
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        $user->assignRole($data['role']);

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully'
        ]);
    }

    public function edit(User $user)
    {
        $user->load('roles');
        $roles = Role::orderBy('name', 'asc')->get();
        return view('components.user-managements.users.edit-modal', compact('user', 'roles'));
    }

    public function update(UserRequest $request, User $user)
    {
        $data = $request->validated();

        if (empty($data['password'])) {
            unset($data['password']);
        } else {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);

        $user->syncRoles($data['role']);

        return response()->json([
            'status' => 'success',
            'message' => 'User updated successfully'
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'User deleted successfully.'
        ]);
    }
}
