<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Illuminate\Http\Request;

class AuthorBookController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Author_Book');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/author_books');
        $this->crud->setEntityNameStrings('Библиотеку', 'Библиотека');

        //для просмотра таб
        $this->crud->setColumns([
            [
                'name' => 'id',
                'label' => 'Номер'
            ],
            [
                'name' => 'book',
                'label' => 'Книги'
            ],
            [
                'name' => 'author',
                'label' => 'Авторы'
            ]
        ]);
        //для добавления,редакт полей в таб
        $this->crud->addFields([
            [
                'name' => 'id_book',
                'attribute'=>'name',
                'label' => 'Книги',
                'type'=>'select2', //вып список
                'model'=>"App\Models\Book"
            ],
            [
                'name' => 'id_author',
                'attribute'=>'name',
                'label' => 'Авторы',
                'type'=>'select2', //вып список
                'model'=>"App\Models\Author"
            ]
        ]);

    }

//    function getAuthor($entry)
//    {
//        return $entry->author->name;
//    }
}
