<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrcamentoController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'servico' => 'required',
            'imovel' => 'required',
            'mensagem' => 'required',
        ]);

        // Dados para o e-mail
        $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'servico' => $request->servico,
            'imovel' => $request->imovel,
            'mensagem' => $request->mensagem,
        ];

        // Envia o e-mail usando uma view Blade
        Mail::send('emails.orcamento', $data, function ($message) use ($request) {
            $message->to('contato@seusite.com')
                    ->subject('Nova Solicitação de Orçamento');
        });

        return redirect()->route('site.index')->with('success', 'Solicitação enviada com sucesso!');
    }
}
