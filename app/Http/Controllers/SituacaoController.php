<?php

namespace App\Http\Controllers;

use App\Models\Situacao;
use Illuminate\Http\Request;

class SituacaoController extends Controller
{
    public function index()
    {
        $situacoes = Situacao::all();
        return view('situacoes.index', compact('situacoes'));
    }

    public function create()
    {
        return view('situacoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
        ]);

        Situacao::create($request->all());

        return redirect()->route('situacoes.index')->with('success', 'Situação criada com sucesso.');
    }

    public function edit(Situacao $situacao)
    {
        return view('situacoes.edit', compact('situacao'));
    }

    public function update(Request $request, Situacao $situacao)
    {
        $request->validate([
            'descricao' => 'required',
        ]);

        $situacao->update($request->all());

        return redirect()->route('situacoes.index')->with('success', 'Situação atualizada com sucesso.');
    }

    public function delete($id)
    {
        $situacao = Situacao::findOrFail($id);
        return view('situacoes.delete', compact('situacao'));
    }

    public function destroy($id)
    {
        $situacao = Situacao::findOrFail($id);
        $situacao->delete();
        return redirect()->route('situacoes.index')->with('success', 'Situação excluída com sucesso.');
    }
}
