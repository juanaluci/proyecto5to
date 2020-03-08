<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Cosmetico;

use Illuminate\Http\Request;

class CosmeticosController extends Controller
{
            public function index(){
                $cosmeticos=Cosmetico::get();
                return view('sistema.cosmeticos.index', compact('cosmeticos'));

            }

            public function index2(){
                $cosmeticos=Cosmetico::get();
                return view('sistema.formulariocosmeticos', compact('cosmeticos'));


        }

        public function create(){

            return view('sistema.cosmeticos.create');

        }

        public function store(Request $request){

            $cosmetico= Cosmetico::create ($request->all());
            return redirect()->route('cosmeticos.index');

        }



        public function edit($id){
            $cosmetico=Cosmetico::findOrFail($id);
            return view('sistema.cosmeticos.edit')->with(compact('cosmeticos'));

        }


        public function  update(Request $request, $id){
                $cosmetico=Cosmetico::find($id);
                $cosmetico->update($request->all());
                return redirect()->route('cosmeticos.index');


        }
        public function delete($id){
            $cosmetico=Cosmetico::destroy($id);
            return redirect('cosmeticos');
        }

        }

