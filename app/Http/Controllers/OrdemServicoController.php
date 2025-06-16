<?php
namespace App\Http\Controllers;

use App\Models\OrdemServico;
use App\Models\Cliente;
use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{
    public function index()
    {
        $ordensServico = OrdemServico::with('cliente')->get();
        return view('admin.ordens_servico.index', compact('ordensServico'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('admin.ordens_servico.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required',
            'descricao' => 'required',
            'status' => 'required',
        ]);

        OrdemServico::create($request->all());
        return redirect()->route('ordens-servico.index')->with('success', 'Ordem de Serviço cadastrada com sucesso!');
    }

    public function edit(OrdemServico $ordemServico)
    {
        $clientes = Cliente::all();
        return view('admin.ordens_servico.edit', compact('ordemServico', 'clientes'));
    }

    public function update(Request $request, OrdemServico $ordemServico)
    {
        $request->validate([
            'cliente_id' => 'required',
            'descricao' => 'required',
            'status' => 'required',
        ]);

        $ordemServico->update($request->all());
        return redirect()->route('ordens-servico.index')->with('success', 'Ordem de Serviço atualizada com sucesso!');
    }

    public function destroy(OrdemServico $ordemServico)
    {
        $ordemServico->delete();
        return redirect()->route('ordens-servico.index')->with('success', 'Ordem de Serviço excluída com sucesso!');
    }
}
