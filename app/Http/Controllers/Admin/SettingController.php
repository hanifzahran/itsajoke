<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\UploadAble;

class SettingController extends Controller
{
    public function index()
    {
        $this->setPageTitle('Settings', 'Manage Settings');
        return view('admin.settings.index');
    }
    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
        
    }
}
