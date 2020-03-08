<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RecorridoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_see_recorrido()
    {
        $this->get('/Recorrido')
             ->assertStatus(200)
             ->assertSee('Recorrido Virtual');
    }
}
