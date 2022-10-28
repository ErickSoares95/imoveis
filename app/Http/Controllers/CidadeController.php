<?php

namespace App\Http\Controllers;

use App\Http\Requests\CidadeRequest;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index()
    {
        $cidades = Cidade::index();

        return view("admin.cidades.cidade", [
            "cidades" => $cidades
        ]);
    }

    public function create()
    {
        return view("admin.cidades.cidade_create");
    }

    public function store(CidadeRequest $request){
        $message = "Falha ao adicionar cidade";
        $input = $request->validated();
        if (Cidade::create_cidade($input['name'])) {
            $message = "cidade adicionada com sucesso";
        }
        return redirect()->route("cidade.index")->with("message", $message);
    }

    public function edit(int $id)
    {
        $cidade = Cidade::where("id", $id)->first();
        return view("admin.cidades.cidade_edit", [
            "cidade" => $cidade
        ]);
    }

    public function update(int $id, CidadeRequest $request)
    {
        $message = "Falha ao atualizar nome da cidade";
        $input = $request->validated();
        if (Cidade::update_cidade($id, $input['name'])) {
            $message = "nome da cidade atualizado com sucesso";
        }
        return redirect()->route("cidade.index")->with("message", $message);
}
    public function destroy(int $id)
    {
        $message = "falha ao deletar Cidade";
        if (Cidade::delete_cidade($id)) {
            $message = "Cidade deletada com sucesso";
        }
        return redirect()->route("cidade.index")->with("message", $message);
    }
}
