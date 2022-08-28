<?php

namespace App\Http\Controllers\ApiKanban;

use App\Models\BackLogDashboardModel;
use App\Repositories\BackLogDashboardRepository;
use Illuminate\Http\Request;

class BackLogDashboardController extends BaseController
{

    private $backLogDashboardRepository;

    public function __construct()
    {
        parent::__construct();

        $this->backLogDashboardRepository = app(BackLogDashboardRepository::class);

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
}
