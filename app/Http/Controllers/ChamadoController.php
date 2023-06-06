<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use App\Models\Setor;
use App\Models\Situacao;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    public function index()
    {
        $chamados = Chamado::with('setor', 'situacao')->get();
        return view('chamados.index', compact('chamados'));
    }

    public function create()
    {
        $setores = Setor::all();
        $situacoes = Situacao::all();
        return view('chamados.create', compact('setores', 'situacoes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'setor_id' => 'required',
            'situacao_id' => 'required',
            'titulo' => 'required',
            'descricao' => 'required',
            'prazo_termino' => 'required|date',
        ]);

        Chamado::create($request->all());

        return redirect()->route('chamados.index')->with('success', 'Chamado criado com sucesso.');
    }

    public function edit(Chamado $chamado)
    {
        $setores = Setor::all();
        $situacoes = Situacao::all();
        return view('chamados.edit', compact('chamado', 'setores', 'situacoes'));
    }

    public function update(Request $request, Chamado $chamado)
    {
        $request->validate([
            'setor_id' => 'required',
            'situacao_id' => 'required',
            'titulo' => 'required',
            'descricao' => 'required',
            'prazo_termino' => 'required|date',
        ]);

        $chamado->update($request->all());

        return redirect()->route('chamados.index')->with('success', 'Chamado atualizado com sucesso.');
    }

    public function delete($id)
    {
        $chamado = Chamado::findOrFail($id);
        return view('chamados.delete', compact('chamado'));
    }

    public function destroy($id)
    {
        $chamado = Chamado::findOrFail($id);
        $chamado->delete();
        return redirect()->route('chamados.index')->with('success', 'Chamado excluído com sucesso.');
    }
}
