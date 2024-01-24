<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TanulokModel extends Model
{
    //use HasFactory;
    protected $table="tanulok";
    protected $primaryKey="id";
    protected $fillable=['omaz','nev','lakhely','szulido'];
}
