<?php

namespace App\Http\Controllers;
use App\User;
use App;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\HomeRepository;
use App\Http\Requests\UpdateHomeRequest;
use Flash;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $Items =App\home::all();
     return view('home.home')->with('items',$Items);
    }

    public function edit()
    {
        if (!empty($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }

      $item = App\Home::all()->find($id);

       if (empty($item)) {
          Flash::error('item no encontrado');

            return redirect(route('home.index'));
        }else

        return view('home.edit')->with('item',$item);

    }


    public function update(){

        if (!empty($_REQUEST)) {
            $id = $_REQUEST['id'];
            $home = App\Home::all()->find($id);
            $home->descripcion = $_REQUEST['descripcion'];

            $home->save();

            Flash::success('Datos guardados exitasamente.');
            return redirect(url('/home'));

        }else{

            Flash::error('Error al guardar');
            return redirect(url('/home'));

        }

    }




}
