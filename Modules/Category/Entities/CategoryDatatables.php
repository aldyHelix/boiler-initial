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
        ->addColumn('action', function($item) {
          return view('ladmin::table.action', [
            'show' => null,
            'edit' => [
              'gate' => 'administrator.master-data.category.update',
              'url' => route('administrator.master-data.category.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
              'gate' => 'administrator.master-data.category.destroy',
              'url' => route('administrator.master-data.category.destroy', [$item->id, 'back' => request()->fullUrl()]),
            ]
          ]);
        })
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
          __('Title'),
          __('Action') 
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
              ['data' => 'action', 'class' => 'text-center', 'orderable' => false],
          ]
        ]
      ];

    }

  }