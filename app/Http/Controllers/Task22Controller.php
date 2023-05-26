<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task22;

use Illuminate\Support\Carbon;

class Task22Controller extends Controller
{
    public function index()
    {
        $data = Task22::all();
        $no = 0;
        return view('users.index', compact('data', "no"));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required|in:admin,staff',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $data = Task22::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => $request->password,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($data) {
            return redirect()
                ->route('user.index')
                ->with([
                    'success' => 'Data Berhasil Ditambahkan'
                ]);
        }else{
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi Kesalahan, tolong diulangi'
                ]);
        }
    }
    public function edit($id)
    {
        $data = Task22::findOrFail($id);
        return view('users.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required|in:admin,staff',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $data = Task22::findOrFail($id);

        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => $request->password,
            'updated_at' => now()
        ]);

        if ($data) {
            return redirect()
                ->route('user.index')
                ->with([
                    'success' => 'Data Berhasil Diupdate'
                ]);
        }else{
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi Kesalahan, tolong diulangi'
                ]);
        }
    }
    public function destroy($id)
    {
        $data = Task22::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()
            ->route('user.index')
            ->with([
                'success' => 'Data berhasil dihapus'
            ]);
        }else{
            return redirect()
            ->route('user.index')
            ->with([
                'error' => 'Data gagal dihapus'
            ]);
        }
    }
}
