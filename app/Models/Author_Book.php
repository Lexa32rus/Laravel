<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author_Book extends Model
{
    use HasFactory,CrudTrait;
    protected  $table='author_books';
    protected  $primaryKey='id';

    protected  $guarded=['id'];//запоняется все,кроме ид
    public function author()
    {
        return $this->hasOne(Author::class, 'id','id_author');
    }
    public function book()
    {
        return $this->hasOne(Book::class, 'id','id_book');
    }
}
