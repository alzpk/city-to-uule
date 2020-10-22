<?php

namespace Alzpk;

use Alzpk\DTO\Response;

class CityToUule
{
    /**
     * Pass in the city that you want to convert into a uule param
     * @param string $city
     */
    public function __construct($city)
    {
        return $this->convert($city);
    }

    /**
     * @param string $city
     * @return Response
     */
    private function convert($city)
    {
        $uule = $city;

        return new Response([
            "city" => $city,
            "uule" => $uule,
        ]);
    }
}