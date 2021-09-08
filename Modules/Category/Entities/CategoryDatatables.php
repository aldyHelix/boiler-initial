<?php 

  namespace Modules\Category\Entities;

  use Modules\Category\Entities\Category;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class CategoryDatatables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(Category::query())
        ->addIndexColumn()
        ->escapeColumns([])
        ->make(true);
    }

    /**
     * Datatables Option
     */
    public function options() {
      
      /**
       * Data from controller
       */
      $data = self::$data;

      return [
        'title' => 'List Of Category',
        'buttons' => null, // e.g : view('user.actions.create')
        'fields' => [ 
          __('No'),
          __('ID'),
          __('Title') 
        ], // Table header
        'foos' => [ // Custom data array. You can call in your blade with variable $foos
          'bar' => 'baz',
          'baz' => 'bar',
        ],
        /**
         * DataTables Options
         */
        'options' => [
          'processing' => true,
          'serverSide' => true,
          'ajax' => request()->fullurl(),
          'columns' => [
              ['data' => 'DT_RowIndex', 'name' => 'DT_RowIndex', 'orderable' => false],
              ['data' => 'id', 'class' => 'text-center'],
              ['data' => 'category_title'],
          ]
        ]
      ];

    }

  }