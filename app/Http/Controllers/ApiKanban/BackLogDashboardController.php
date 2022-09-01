<?php

namespace App\Http\Controllers\ApiKanban;

use App\Http\Requests\CreateEntryRequest;
use App\Models\BackLogDashboardModel;
use App\Repositories\BackLogDashboardRepository;
use App\Repositories\CreateEntryRepository;
use Illuminate\Http\Request;

class BackLogDashboardController extends BaseController
{

    private $backLogDashboardRepository;

    public function __construct()
    {
        parent::__construct();

        $this->backLogDashboardRepository = app(BackLogDashboardRepository::class);
        $this->createEntryRepository = app(CreateEntryRepository::class);

    }


    public function getTodo()
    {
        $title = $this->backLogDashboardRepository->getAll();
        return response()->json([
            'name' => $title,
        ]);

//        $title = BackLogDashboardModel::all();
//        return response()->json([
//            'name' => $title,
//        ]);
    }

    public function createEntry(CreateEntryRequest $request)
    {
        $entry = $this->createEntryRepository->createEntry($request);
        return response($entry, 201);
    }

    public function updateEntry(CreateEntryRequest $request, $id)
    {
        $item = $this->backLogDashboardRepository->getEdit($id);
        if (empty($item)) {
            return response()->json('error update');
        }
        $data = $request->all();
        $result = $item->update($data);
        if ($result) {
            return response()->json('update ok');
        } else {
            return response()->json('error update');
        }
    }

    public function deleteEntry($id)
    {
        $entry = $this->backLogDashboardRepository->deleteEntry($id);
        if (is_null($entry)) {
            return response()->json(['messages' => 'null'], 404);
        }
        $entry->delete();
        return response()->json(null, 204);
    }


}
