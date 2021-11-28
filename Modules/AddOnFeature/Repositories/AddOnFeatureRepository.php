<?php

namespace Modules\AddOnFeature\Repositories;

use Illuminate\Http\Request;
use Modules\AddOnFeature\Entities\AddOnFeature;
use Hexters\Ladmin\Contracts\MasterRepositoryInterface;
use App\Repositories\Repository;
use App\Services\AddOnFeatureService;

class AddOnFeatureRepository extends Repository implements MasterRepositoryInterface {

  public function __construct(AddOnFeatureService $addOnFeatureService, AddOnFeature $model) {
    parent::__construct($model);
    $this->addOnFeatureService = $addOnFeatureService;
  }
}
