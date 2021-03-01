<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class  Author extends Model
{
    use HasFactory,CrudTrait;

    protected  $table='authors';
    protected  $primaryKey='id';

    protected  $guarded=['id'];//запоняется все,кроме ид
    public function book()
    {
        //    return $this->hasOne(Author::class,'id');
        return $this->belongsToMany(Book::class,'author_books','id_author','id_book');
        //,'id_author','id_book'
    }
}
