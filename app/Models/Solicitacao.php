<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;
    
    protected $table = 'solicitacoes';
    protected $fillable = ['nome_paciente','cpf_paciente','cidade_paciente','uf_paciente','especialidades_id','status_id','descricao'];
    protected $hidden = ["created_at", "updated_at"];

    public function especialidades()
    {
        return $this->belongsTo(Especialidade::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}