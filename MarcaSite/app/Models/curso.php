<?php

namespace App\Models;

use App\Models\registration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;
    protected $table='cursos';

public function Registros()
{
    return $this->hasMany(registration::class,'fk_curso','id');
}

}
