<?php

namespace App\Http\Controllers;

use App\Models\OperatorModel;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        $data['operator'] = OperatorModel::getAllOperator()->get();
        $data['no'] = 1;
        return view('operator.operator', $data);
    }

    public function tambah()
    {
        $data['operator'] = OperatorModel::all();
        return view('operator.operator_tambah', $data);
    }

    public function tambah_action(Request $request)
    {
        $request->validate([
            'nama_operator' => 'required',
            'username' => 'required',
            'email_operator' => 'required',
            'no_telepon' => 'required',
            'password_operator' => 'required'

        ]);

        $data = [
            'nama_operator' => $request->nama_operator,
            'username' => $request->username,
            'email_operator' => $request->email_operator,
            'no_telepon' => $request->no_telepon,
            'password_operator' => $request->password_operator
        ];

        OperatorModel::create($data);
        return redirect('/operator')->with(['success' => 'Berhasil Menyimpan Data Operator']);
    }

    public function hapus($id)
    {
        OperatorModel::where('id_operator', $id)->delete();
        return redirect('/operator')->with(['success' => 'Berhasil Menghapus Data Operator']);
    }

    public function edit($id)
    {
        $data['detail'] = OperatorModel::where('id_operator', $id)->first();
        $data['operator'] = OperatorModel::all();
        return view('operator.operator_edit', $data);
    }

    public function edit_action($id, Request $request)
    {
        $request->validate([
            'nama_operator' => 'required'
        ]);

        $data = [
            'nama_operator' => $request->nama_operator
        ];

        OperatorModel::where('id_operator', $id)->update($data);
        return redirect('/operator')->with(['success' => 'Berhasil Mengubah Data Operator']);
    }
}
