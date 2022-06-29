<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BasicInfo;

class BasicInfoController extends Controller
{
    public function getBasicInfo()
    {
        $BI = BasicInfo::all()[0];
        return $BI;
    }
}
