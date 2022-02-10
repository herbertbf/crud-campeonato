<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\Competicao;


class TimeController extends Controller
{
    /**
     * Global private declarations.
     */
    private $times, $competicoes;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Time $times){
        $this->times = $times;
        $this->competicoes = $this->convert_object_to_array(Competicao::all(),'id','nome');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = $this->times->all();
        return view('index', compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competicoes = $this->competicoes;
        return view('form', compact('competicoes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = $this->times->create([
            'nome' => $request->nome,
        ]);
        $time->competicao = $request->competicao;
        $times = $this->times->all();
        return view('index', compact('times'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $time = $this->times->find($id);
        $competicoes = $this->competicoes;
        $form = 'disabled';
        return view('form', compact('competicoes', 'time', 'form'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $time = $this->times->find($id);
        $competicoes = $this->competicoes;
        return view('form', compact('competicoes', 'time'));
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
        $time = $this->times->find($id);
        $time->update($request->all());
        $times = $this->times->all();
        return view('index', compact('times'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $time = $this->times->find($id);
       $deleted = $time->delete();
       $times = $this->times->all();
       return view('index', compact('times'));
    }



    public function form(){
        return view('form');
    }

    public function convert_object_to_array($object, $key, $value)
    {
        $array = array();
        foreach($object as $atibutes){
            $array[$atibutes->$key]= $atibutes->$value;
        };
        return $array;
    }
}
