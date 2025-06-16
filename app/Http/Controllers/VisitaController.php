<?php
namespace App\Http\Controllers;

use App\Models\Visita;
use App\Models\OrdemServico;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    public function index()
    {
        $visitas = Visita::with('ordemServico')->get();
        return view('admin.visitas.index', compact('visitas'));
    }

    public function create()
    {
        $ordensServico = OrdemServico::all();
        return view('admin.visitas.create', compact('ordensServico'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ordem_servico_id' => 'required',
            'data_agendada' => 'required|date',
            'tecnico' => 'required',
        ]);

        Visita::create($request->all());
        return redirect()->route('admin.visitas.index')->with('success', 'Visita cadastrada com sucesso!');
    }

    public function edit(Visita $visita)
    {
        $ordensServico = OrdemServico::all();
        return view('admin.visitas.edit', compact('visita', 'ordensServico'));
    }

    public function update(Request $request, Visita $visita)
    {
        $request->validate([
            'ordem_servico_id' => 'required',
            'data_agendada' => 'required|date',
            'tecnico' => 'required',
        ]);

        $visita->update($request->all());
        return redirect()->route('admin.visitas.index')->with('success', 'Visita atualizada com sucesso!');
    }

    public function destroy(Visita $visita)
    {
        $visita->delete();
        return redirect()->route('admin.visitas.index')->with('success', 'Visita excluída com sucesso!');
    }
}
