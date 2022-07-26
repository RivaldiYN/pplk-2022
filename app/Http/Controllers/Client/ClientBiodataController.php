<?php
namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class ClientBiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = User::where('id', '1')->firstOrFail();
        return view('client.biodata.biodata', compact('biodata'));
    }

    public function indexEditBio()
    {
        $viewbiodata = User::where('id', '1')->firstOrFail();;
        return view('client.biodata.edit-biodata', compact('viewbiodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = user::all();
        return view('registrasi.create', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request;
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User::create([

            'nama'=>$request->name,
            'golonganDarah'=>$request->golonganDarah,
            'nim'=>$request->nim,
            'email'=>$request->email,
            'kelompok'=>$request->divisi,
            'instagram'=>$request->instagram,
            'nomorHp'=>$request->nohp,
            'password'=> Hash::make($request->password),
            'logo'=>$request->logo,
            'filosofiLogo'=>$request->filosofiLogo,
            'qrCode'=>$request->nim,
            'riwayatPenyakit'=>$request->riwayatPenyakit,
            'roles_id'=>$request->roles,
            'prodi'=>$request->prodi
        ]);
        return 'daftar Berhasil';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $Biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $Biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request;  $request
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBiodataRequest $request, Biodata $Biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $Biodata)
    {
        //
    }
}
