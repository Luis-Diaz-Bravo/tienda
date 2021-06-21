<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
  public function index()
  {
    $productos = DB::table('productos')->paginate(10);
    return view('productos.index', [ 'productos' => $productos ]);
  }

  public function create()
  {
    return view('productos.create');
  }

  public function store(Request $request)
  {
    $ruta = Storage::disk('dropbox')->putFile('producto_img', $request->file('imagen'));

    $producto = new Producto();
    $producto->nombre = $request->get('nombre');
    $producto->descripcion = $request->get('descripcion');
    $producto->precio_unidad = $request->get('precio_unidad');
    $producto->existencia = $request->get('existencia');
    $producto->imagen = $ruta;
    $producto->save();

    return redirect('productos');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
