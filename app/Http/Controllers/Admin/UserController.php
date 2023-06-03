<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Jabatan;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('jabatan')->paginate();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatans = Jabatan::get(['id', 'nama']);

        return view('admin.users.create', compact('jabatans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        if ($request->validated()) {
            $data = $request->except('password');
            $data['password'] = bcrypt($request->password);
            
            // Mendapatkan nilai jabatan_id dari request
            $jabatanId = $request->input('jabatan_id');

            // Mendapatkan nilai is_admin berdasarkan jabatan_id
            $is_admin = ($jabatanId == 1) ? true : false;

            // Menambahkan nilai is_admin ke dalam array data
            $data['is_admin'] = $is_admin;

            // Simpan data ke tabel users
            User::create($data);
        }

        return redirect()->route('admin.users.index')->with([
            'message' => 'Berhasil dibuat',
            'alert-info' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $jabatans = Jabatan::get(['id', 'nama']);

        return view('admin.users.edit', compact('user', 'jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        if ($request->validated()) {
            $data = $request->except('password');
            $data['password'] = bcrypt($request->password);
            
            // Mendapatkan nilai jabatan_id dari request
            $jabatanId = $request->input('jabatan_id');

            // Mendapatkan nilai is_admin berdasarkan jabatan_id
            $is_admin = ($jabatanId == 1) ? true : false;

            // Menambahkan nilai is_admin ke dalam array data
            $data['is_admin'] = $is_admin;

            // Update data di tabel users
            $user->update($data);
        }
        return redirect()->route('admin.users.index')->with([
            'message' => 'Berhasil diubah',
            'alert-info' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with([
            'message' => 'Berhasil dihapus',
            'alert-info' => 'danger'
        ]);
    }
}