<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
    [
        'uri' => 'gestionali',
        'name' => 'Sistema Gestionali',
        'costo' => 1500,
        'tempo_di_realizzazione' => '2 settimane'
    ],
    [
        'uri' => 'ecommerce',
        'name' => 'Piattaforma eCommerce',
        'costo' => 2500,
        'tempo_di_realizzazione' => '3 settimane'
    ],
    [
        'uri' => 'siti-web',
        'name' => 'Siti Web',
        'costo' => 1000,
        'tempo_di_realizzazione' => '1 settimana'
    ],
    [
        'uri' => 'marketing-digitale',
        'name' => 'Marketing Digitale',
        'costo' => 1800,
        'tempo_di_realizzazione' => '2 settimane'
    ],
    [
        'uri' => 'app-mobile',
        'name' => 'Applicazione Mobile',
        'costo' => 3000,
        'tempo_di_realizzazione' => '4 settimane'
    ],
    [
        'uri' => 'seo',
        'name' => 'Servizi SEO',
        'costo' => 1200,
        'tempo_di_realizzazione' => '2 settimane'
    ],
    [
        'uri' => 'social-media',
        'name' => 'Gestione Social Media',
        'costo' => 800,
        'tempo_di_realizzazione' => '1 settimana'
    ],
    [
        'uri' => 'analisi-dati',
        'name' => 'Analisi Dati',
        'costo' => 2200,
        'tempo_di_realizzazione' => '3 settimane'
    ],
    [
        'uri' => 'design-grafico',
        'name' => 'Design Grafico',
        'costo' => 900,
        'tempo_di_realizzazione' => '1 settimana'
    ],
    [

        'uri' => 'formazione',
        'name' => 'Formazione Online',
        'costo' => 500,
        'tempo_di_realizzazione' => '2 settimane'
    ],

  ];

        return view('servizi', compact('services'));
    }
}
