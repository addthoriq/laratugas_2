<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SantriModel;

class AdminController extends Controller
{
    protected $folder   = 'admin.santri';
    public function index()
    {
        $data['santri'] = SantriModel::orderBy('id')->paginate(3);
        return view($this->folder.'.index', $data);
    }
    public function create()
    {
        return view($this->folder.'.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'  => 'required|min:50',
            'email'  => 'required|max:30',
            'password'  => 'required|max:30',
        ]);
        SantriModel::create([
            'nama'  => $request->nama,
            'email'  => $request->email,
            'password'  => bcrypt($request->password),
            'gender'  => $request->gender,
        ]);
        return redirect('admin/santri');
    }
    public function edit($id)
    {
        $santri    = SantriModel::find($id);
        return view($this->folder.'.edit', compact(['santri']));
    }
    public function update(Request $request)
    {
        $id     = $request->id;
        SantriModel::find($id)->update([
            'nama'  => $request->nama,
            'email'  => $request->email,
            'password'  => bcrypt($request->password),
            'gender'  => $request->gender,
        ]);
        return redirect('admin/santri');
    }
    public function delete($id)
    {
        SantriModel::find($id)->delete();
        return redirect('admin/santri');
    }
}
