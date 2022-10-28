<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImovelRequest;
use App\Models\Cidade;
use App\Models\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index()
    {
        $imoveis = Imovel::index();

        return view("admin.imoveis.imovel", [
            "imoveis" => $imoveis
        ]);
    }

    public function create()
    {
        $cidades = Cidade::index();
        return view("admin.imoveis.imovel_create", [
            "cidades" => $cidades
        ]);
    }

    public function store(ImovelRequest $request)
    {
        $message = "Falha ao adicionar Imovel!";
        $input = $request->validated();
        if (Imovel::create_imovel($input['name'], $input['terreno'], $input['salas'], $input['banheiros'], $input['dormitorios'], $input['garagens'], $input['descricao'], $input['preco'], $input['cidade_id'], $input['tipo_id'], $input['finalidade_id'])) {
            $message = "Imovel adicionado com sucesso!";
        }
        return redirect()->route("imovel.index")->with("message", $message);
    }

    public function edit(int $id)
    {
        $imovel = Imovel::where("id", $id)->first();
        return view("admin.imoveis.imovel_edit",[
            "imovel" => $imovel
        ]);
    }

    public function update(int $id, ImovelRequest $request)
    {
        $message = "Falha ao atualizar Imovel";
        $input = $request->validated();
        if (Imovel::update_imovel($id, $input['name'], $input['terreno'], $input['salas'], $input['banheiros'], $input['dormitorios'], $input['garagens'], $input['descricao'], $input['preco'], $input['cidade_id'], $input['tipo_id'], $input['finalidade_id'] )) {
            $message = "Imovel atualizado com sucesso";
        }
        return redirect()->route("imovel.index")->with("message", $message);
    }

    public function destroy(int $id)
    {
        $message = "Falha ao deletar Imovel";
        if (Imovel::delete_imovel($id)) {
            $message = "Imovel excluído com sucesso!";
        }
        return redirect()->route("imovel.index")->with("message", $message);
    }


}
