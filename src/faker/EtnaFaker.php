<?php

namespace Millooo94\EtnaFaker\Faker;

class EtnaFaker
{
    public $firstNames;
    public $lastNames;
    public $cities;
    public $addresses;

    public function __construct()
    {
        $this->firstNames = include __DIR__ . '/../mockups/firstNames.php';
        $this->lastNames = include __DIR__ . '/../mockups/lastNames.php';
        $this->cities = include __DIR__ . '/../mockups/cities.php';
        $this->addresses = include __DIR__ . '/../mockups/addresses.php';
    }

    public function firstName()
    {
        $randomKey = array_rand($this->firstNames);

        return $this->firstNames[$randomKey];
    }

    public function lastName()
    {
        $randomKey = array_rand($this->lastNames);

        return $this->lastNames[$randomKey];
    }

    public function city()
    {
        $randomKey = array_rand($this->cities);

        return $this->cities[$randomKey];
    }

    public function address()
    {
        $randomKey = array_rand($this->addresses);

        return $this->addresses[$randomKey];
    }

    public function email()
    {

        return strtolower($this->firstName() . '_' . $this->lastName() . '@gmail.com');

    }
}
