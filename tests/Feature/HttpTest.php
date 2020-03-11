<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class HttpTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHttpRequestToApiReturns200()
    {
        Http::fake([
            'www.recipepuppy.com/*' => Http::response(['recipe'], 302),
        ]);
        self::assertEquals(302, Http::get('http://www.recipepuppy.com/api/?i=garlic,bread')->status());
    }
}
