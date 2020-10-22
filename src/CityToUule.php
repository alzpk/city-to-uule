<?php

namespace Alzpk;

use Alzpk\DTO\Response;

class CityToUule
{
    /**
     * @param string $city
     * @return Response
     */
    public function convertCityToUule($city)
    {
        $uule = $city;

        return new Response([
            "city" => $city,
            "uule" => $uule,
        ]);
    }
}