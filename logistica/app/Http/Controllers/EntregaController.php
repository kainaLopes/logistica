<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntregaController extends Controller
{
    private $entrega;
    public function __construct(Product $entrega)
    {
        $this->entrega = $entrega;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrega = $this->entrega->paginate(10);
        return view('fornecedor.entrega.index', compact('entregas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(EntregaRequest $request, $entrega)
    {
        $data = $request->all();
        $entrega=$this->entrega->find($entrega);
        $entrega->update($data);
        flash('Frete Atualizado com sucesso')->success();
        return redirect()->route('admin.entrega.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entrega=$this->entrega->find($entrega);
        $entrega->delete();
        flash('Produto ' .$entrega->name.' Deletado com sucesso')->success();
        return redirect()->route('admin.entrega.index');
    }
}
