<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
   // Mostrar todos los servicios
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    // Mostrar detalle de un servicio y formulario de reserva
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('services.show', compact('service'));
    }
}
