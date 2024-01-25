<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComplainTest extends TestCase
{
    public function testIndex()
    {
        $this->get('/pengaduan?category=lingkungan')->assertSeeText('lingkungan');
    }
}
