<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   protected $table='books';
    protected $fillable =[
'id_buku','nama_buku','penerbit','pengarang'
    ];
}
