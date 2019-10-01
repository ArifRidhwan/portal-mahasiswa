<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaRegister extends Model
{
    protected $table = 'mahasiswa_registers';
    protected $fillable = ['nama', 'npm', 'alamat', 'email'];
}
