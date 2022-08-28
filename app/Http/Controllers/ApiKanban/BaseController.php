<?php

namespace App\Http\Controllers\ApiKanban;

use App\Http\Controllers\Controller as GuestBaseController;

/**
 * БАзовый контроллер для всех контролеров управления админки
 *
 */
abstract class BaseController extends GuestBaseController
{

    /**
     * BaseController constructor
     */
    public function __construct()
    {

    }
}
