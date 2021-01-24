<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Support\Str;
use App\Models\Matkul;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function list()
    {
        $dosen = Dosen::paginate(5);
        // dd($dosen);
        return view('list', compact('dosen'));
    }
    public function create()
    {
        $mk = Matkul::all();
        return view('createdsn', compact('mk'));
    }
    public function store(Request $request)
    {
        $post = new Dosen();
         
        $post->matkul_id = $request->matkul_id;
        $post->nip = $request->nip; 
        $post->name = $request->name; 
        $post->slug = Str::slug($request->nip);
        $post->alamat = $request->alamat; 

        $post->save();
        return redirect('/list');
    }
    public function detail (Dosen $dosen)
    {
        // dd($dosen);
        $mk = Matkul::all();
        return view('editdsn', compact('dosen', 'mk'));
    }
    public function update (Dosen $dosen)
    {
        $dsn = request()->all();
        // dd($dsn);
        $dosen->update($dsn);
        return back();
    }
    public function delete(Dosen $dosen)
    {
        $dosen->delete();
        return redirect('/list');
    }
}
