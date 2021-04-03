<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos']=Productos::paginate(8);
        return view('productos.index', $datos);
    }

    public function index2()
    {
        //
        $datos['productos']=Productos::paginate(8);
        return view('productos.index2', $datos);
    }

    public function vender($id)
    {
        $producto=Productos::findOrFail($id);

        return view('productos.vender', compact('producto'));
    }

    public function vendido($id)
    {
        productos::where('id','=',$id)->decrement('cantidad', 1);
        return redirect('/');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //$datosproducto=request()->all();
        $datosProducto=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosProducto['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Productos::insert($datosProducto);

        //return response()->json($datosproducto);
        return redirect('productos')->with('Mensaje','Producto agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto=Productos::findOrFail($id);

        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosproducto=request()->except('_token','_method');

        if($request->hasFile('Foto')){

            $producto=Productos::findOrFail($id);

            Storage::delete('public/'.$producto->Foto);

            $datosproducto['Foto']=$request->file('Foto')->store('uploads','public');
        }

        productos::where('id','=',$id)->update($datosproducto);

        //return response()->json($datosUsuario);

        $producto=productos::findOrFail($id);
        //return view('usuarios.edit', compact('usuario'));

        return redirect('productos')->with('Mensaje', 'Producto modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        productos::destroy($id);
        return redirect('productos')->with('Mensaje', 'Se elimino el producto');

    }
}
