<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /**
     * Pruebas basicas de las rutas.
     *
     * @return void
     */
     function test_it_see_home_page()
    {
        $this->get('/')
             ->assertStatus(200)
             ->assertSee('Quinta De Anauco');
    }
}
