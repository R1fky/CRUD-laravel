<?php

namespace App\Http\Controllers;

use App\Models\DataKaryawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function show()
    {
        return view(
            'dataKaryawan',

            ['datakaryawan' => DataKaryawan::all()]
        );
    }

    public function add(Request $request)
    {
        $datakaryawan = new DataKaryawan();
        $datakaryawan->nip = $request->nip;
        $datakaryawan->name = $request->name;
        $datakaryawan->alamat = $request->alamat;
        $datakaryawan->bagian = $request->bagian;
        $datakaryawan->save();

        return redirect('/datakaryawan');
    }

    public function edit(DataKaryawan $data)
    {
        return view('karyawan.edit', compact('data'));
    }

    public function update(Request $request, DataKaryawan $data)
    {
        $data->nip = $request->nip;
        $data->name = $request->name;
        $data->alamat = $request->alamat;
        $data->bagian = $request->bagian;
        $data->update();

        return redirect('/datakaryawan');
    }

    public function delete(DataKaryawan $data)
    {
        $data->delete();

        return redirect('/datakaryawan');
    }

    public function tes(DataKaryawan $data)
    {
        return view(
            'components.modal-info-data-karyawan', 
            compact('data')
        );
    }

    // public function info(DataKaryawan $data)
    // {
    //     return view(
    //         'components.modal-info-data-karyawan',
    //         compact('data')
    //     );
    // }
}
