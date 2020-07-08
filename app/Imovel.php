<?php

namespace LaraDev;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'imovels';
    protected $fillable = ['name', 'price'];
}
