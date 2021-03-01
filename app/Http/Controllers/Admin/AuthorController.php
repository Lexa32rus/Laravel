<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Author;
use PHPUnit\TextUI\XmlConfiguration\CoverageHtmlToReport;

class AuthorController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Author');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/authors');
        $this->crud->setEntityNameStrings('Автора','Авторы');

      // $authors=$this->authors();
            //для просмотра таб
        $this->crud->setColumns([
            [
                'name'=>'id',
                'label'=>'Номер'
            ],
            [


                'name'=>'name',
                'label'=>'Автор',
//                'type'=>'closure',
//                'function'=> function($entry) use($authors){
//                    if($entry->name==0) return "-";
//                    return $authors[$entry->name];
//                }
            ]
            ]);
        //для добавления,редакт полей в таб
        $this->crud->addFields([
            [
                'name'=>'name',
                'label'=>'Автора'
            ]
        ]);
    }
//
//    /**
//     * @return array
//     */
//    private function authors() : array
//    {
//        $authors=(new Author())->get();
//        $response=[];
//        foreach ($authors as $author){
//            $response[$author->id]=$author->title;
//        }
//        return $response;
//    }
}
