<?php

namespace App\Http\Controllers\ApiKanban;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEntryRequest;
use App\Repositories\CreateEntryRepository;
use Illuminate\Http\Request;
use App\Models\BackLogDashboardModel;

class CreateEntryController extends BaseController
{

    private $createEntryRepository;

    public function __construct()
    {
        parent::__construct();

        $this->createEntryRepository = app(CreateEntryRepository::class);

    }

    public function createEntry(CreateEntryRequest $request)
    {
        $entry = $this->createEntryRepository->createEntry($request);
        return response($entry, 201);
    }
}
