<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'descricao', 'status'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function visitas()
    {
        return $this->hasMany(Visita::class);
    }
}
