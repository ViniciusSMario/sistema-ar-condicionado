<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;

    protected $fillable = ['ordem_servico_id', 'data_agendada', 'tecnico'];

    public function ordemServico()
    {
        return $this->belongsTo(OrdemServico::class);
    }
}
