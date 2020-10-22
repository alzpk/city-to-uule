<?php

use Alzpk\CityToUule;
use PHPUnit\Framework\TestCase;

class CityToUuleTest extends TestCase
{

    /** @test */
    public function can_convert_city_to_uule()
    {
        $city = 'Copenhagen';

        $response = (new CityToUule())->convertCityToUule($city);

        $this->assertNotNull($response->uule);
        $this->assertEquals($city, $response->city);
    }
}