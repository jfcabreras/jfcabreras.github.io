<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
		$vista = 'home';
		if($id=='1')
			$vista = 'cursos.1IntroduccionAlMercadoFinanciero.index';
		else if($id=='2')
			$vista = 'cursos.2FundamentosDeTrading.index';
		else if($id=='3')
			$vista = 'cursos.3AnalisisTecnicoBasico.index';
		else if($id=='4')
			$vista = 'cursos.4PsicologiaDelTrading.index';
		else if($id=='5')
			$vista = 'cursos.5ConfigurarNTComoPlataforma.index';
		else if($id=='6')
			$vista = 'cursos.6IntroduccionFuturosIndicesEmini.index';
		return view($vista);
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
