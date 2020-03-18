<?php

namespace App\Http\Controllers\Home;

use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $siteSeting;
    public function __construct()
    {
        $this->siteSeting = Site::query()->pluck('value','key');;
    }
}
