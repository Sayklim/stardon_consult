<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    // Show all services
    public function index() {
        return view('services.index', [
            'services' => Service::latest()->filter(request(['tag', 'search']))->paginate(9)
        ]);
    }

    

    //show Single Service
    public function show(Service $service){
        return view('services.show',[
            'service'=>$service
        ]);
    }





    //Register New User


}
