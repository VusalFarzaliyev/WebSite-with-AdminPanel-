<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    public function definition()
    {
        return [
            "title"        =>"Fərqimiz keyfiyyətimizdir",
            "subtitle"     =>"Tezliklə Xidmətinizdə",
            "number_title" =>"İndi Zəng et",
            "number"       =>"(+994)50-869-98-58"
        ];
    }
}
