<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kamusgaul;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminKamusGaulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamusgauls = KamusGaul::all();
        return view('admin.kamusgaul.index', compact('kamusgauls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kamusgaul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekamusgaulRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Kamusgaul::create([
            'gaul' => $request->gaul,
            'asli' => $request->asli,
            'contohPenggunaan' => $request->contohPenggunaan
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/kamusgaul')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/kamusgaul')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kamusgaul  $kamusgaul
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $kamusgaul = KamusGaul::where('id', $id)->first();
        return view('admin.kamusgaul.read', compact('kamusgaul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kamusgaul  $kamusgaul
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $kamusgaul = KamusGaul::where('id', $id)->first();
        return view('admin.kamusgaul.update', compact('kamusgaul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekamusgaulRequest  $request
     * @param  \App\Models\kamusgaul  $kamusgaul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kamusgaul = KamusGaul::where('id', $id)->first();
        $kamusgaul->update(
            [
                'gaul' => $request->gaul,
                'asli' => $request->asli,
                'contohPenggunaan' => $request->contohPenggunaan
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('super/kamusgaul')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/kamusgaul')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kamusgaul $kamusgaul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KamusGaul::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/kamusgaul')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/kamusgaul')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
