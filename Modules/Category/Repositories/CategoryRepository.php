<?php

namespace Modules\Category\Repositories;

use Illuminate\Http\Request;
use Modules\Category\Entities\Category;
use Hexters\Ladmin\Contracts\MasterRepositoryInterface;
use App\Repositories\Repository;
use App\Services\CategoryService;

class CategoryRepository extends Repository implements MasterRepositoryInterface {

  public function __construct(CategoryService $categoryService, Category $model) {
    parent::__construct($model);
    $this->categoryService = $categoryService;
  }

  /**
   * Update user
   *
   * @param Request $request
   * @param [Model] $user
   * @return Void
   */
  public function updateCategory(Request $request, $id) {
    $category = $this->categoryService->updateCategory($request);

    $get_category = $this->model->findOrFail($id);
    $get_category->update($category);
  }

  public function createCategory(Request $request) {
    $category = $this->categoryService->insertCategory($request);

    $this->model->create($category);
  }

  public function getCategoryById($id){
      return $this->model->findOrFail($id);
  }

  public function deleteCategory($id){
      return $this->getCategoryById($id)->delete();
  }
}
