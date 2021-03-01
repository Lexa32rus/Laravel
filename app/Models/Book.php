<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory,CrudTrait;
    protected  $table='books';
    protected  $primaryKey='id';

    protected  $guarded=['id'];//запоняется все,кроме ид

    public function author()
    {
         //return $this->hasOne(Author::class,'id');
         return $this->belongsToMany(Author::class,'author_books','id_book','id_author');
         //,'id_book','id_author'
    }
}
