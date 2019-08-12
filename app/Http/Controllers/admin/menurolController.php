<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\menu;
use App\Models\admin\rol;

class menurolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $menus = menu::getmenu();
        $menusrols = menu::with('roles')->get()->pluck('roles','id')->toArray();
        return view('admin.menu-rol.index', compact('rols', 'menus', 'menusrols'));
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        if ($request->ajax()) {
            $menus = new menu();
            if ($request->input('estado')== 1) {
                $menus->find($request->input('menu_id'))->roles()->attach($request->input('rol_id'));
            }else{
                $menus->find($request->input('menu_id'))->roles()->detach($request->input('rol_id'));
            }
        }else{
            abort(404);
        }
    }



   
}
