<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProcedimentoController extends Controller
{
    public function index(){
        $procedimentos = DB::select('select procedures.* , users.name as nameuser from procedures , users where procedures.user_id = users.id order by procedures.name');
        return view('administrador.procedimento.index',['procedimentos' => $procedimentos]);
    }

    public function show($id){
        $procedimentos = DB::select('select procedures.* , users.name as nameuser from procedures , users where procedures.user_id = users.id and procedures.id = ? order by procedures.name',[$id]);
        return view('administrador.procedimento.show',['procedimentos' => $procedimentos]);
    }
}
