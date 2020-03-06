<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $primaryKey = 'id_penerbit';
    protected $table ='penerbits';
    protected $fillable = [
       'penerbit'];
       
}
