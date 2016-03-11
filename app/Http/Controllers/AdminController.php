<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models;
use View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View::make('admin.index');
    }
    public function organization($id)
    {
        $organization=\App\Models\Organization::find($id);
        $user=\App\Models\Organization::find($id)->user;
        $documents=\App\Models\User::find($organization->user->id)->documents;
        $reports=$organization->reports;
        return View::make('admin.organization', compact('organization','reports','documents'));
    }


}
