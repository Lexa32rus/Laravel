<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class BookController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Book');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/books');
        $this->crud->setEntityNameStrings('Книгу','Книги');

      //  $books=$this->books();
        //для просмотра таб
        $this->crud->setColumns([
            [
                'name'=>'id',
                'label'=>'Номер'
            ],
            [
                'name'=>'name',
                'label'=>'Книга'
            ],
//            [
//                'label'=>'Автор',
//                'type'=>'select',
//                'name'=>'author',
//                'entity'=>'author',
//                'model'=>"App\Models\Author",
//
////                'value'=>function($data){
////                    return $data->author->name;
////                }
////                'type'=>'model_function',
////                'function_name'=>'getAuthor',
////                'function_parameters'=>[]
//            ],
            [
                'name'=>'price',
                'label'=>'Цена'
            ]
        ]);
        //для добавления,редакт полей в таб
        $this->crud->addFields([
            [
                'name'=>'name',
                'label'=>'Книга'
            ],
            [
                'name'=>'price',
                'label'=>'Цена'
            ]
        ]);
    }

        function getAuthor($entry){
            return $entry->author->name;
    }
//    /**
//     * @return array
//     */
//
//    private function books()
//    {
//        $books = (new Book())->get();
//        $response = [];
//        foreach ($books as $book) {
//            $response[$book->id] = $book->title;
//        }
//        return $response;
//    }

}
