<?php
namespace App\Repositories;

use App\Models\BackLogDashboardModel as Model;

class BackLogDashboardRepository extends CoreRepository {
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAll()
    {
        return $this->startConditions()->all();
    }

}
