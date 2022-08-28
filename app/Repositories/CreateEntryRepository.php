<?php
namespace App\Repositories;

use App\Models\BackLogDashboardModel as Model;
use Illuminate\Http\Request;

class CreateEntryRepository extends CoreRepository {

    protected function getModelClass()
    {
        return Model::class;
    }

    public function createEntry(Request $request)
    {

        $entry = $this->startConditions()->create($request->all());
        return $entry;
    }
}
