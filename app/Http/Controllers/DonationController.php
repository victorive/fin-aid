<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationCOntroller extends Controller
{
    public function index(){

        return view('users.newcampaign');
    }
}
