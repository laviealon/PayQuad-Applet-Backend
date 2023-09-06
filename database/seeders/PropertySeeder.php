<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            "name"=> "VanIsland Beach House",
            "city" => "Vancouver",
            "province" => "BC",
            "photo" => "https://angular.io/assets/images/tutorials/faa/bernard-hermant-CLKGGwIBTaY-unsplash.jpg",
            "availableUnits" => 4,
            "sqf" => "8,233 sq ft",
            "price" => "$3.1 million",
        ]);
        DB::table('properties')->insert([
            "name"=> "Bridal Path Luxury Villa",
            "city" => "Toronto",
            "province" => "ON",
            "photo" => "https://angular.io/assets/images/tutorials/faa/brandon-griggs-wR11KBaB86U-unsplash.jpg",
            "availableUnits" => 1,
            "sqf" => "10,230 sq ft",
            "price" => "$4.3 million",
        ]);
        DB::table('properties')->insert([
            "name"=> "Middlewood Manors",
            "city" => "Winnipeg",
            "province" => "SA",
            "photo" => "https://angular.io/assets/images/tutorials/faa/ian-macdonald-W8z6aiwfi1E-unsplash.jpg",
            "availableUnits" => 5,
            "sqf" => "8,110 sq ft",
            "price" => "$2.2 million",
        ]);
        DB::table('properties')->insert([
            "name"=> "One Front St Townhouses",
            "city" => "Toronto",
            "province" => "ON",
            "photo" => "https://angular.io/assets/images/tutorials/faa/krzysztof-hepner-978RAXoXnH4-unsplash.jpg",
            "availableUnits" => 3,
            "sqf" => "6,100 sq ft",
            "price" => "3.3 million"
        ]);
        DB::table('properties')->insert([
            "name"=> "Richmond Luxury Homes",
            "city" => "Vancouver",
            "province" => "BC",
            "photo" => "https://angular.io/assets/images/tutorials/faa/r-architecture-JvQ0Q5IkeMM-unsplash.jpg",
            "availableUnits" => 3,
            "sqf" => "9,320 sq ft",
            "price" => "6.4 million"
        ]);
        DB::table('properties')->insert([
            "name"=> "Rue des Reves Condos",
            "city" => "Quebec City",
            "province" => "QC",
            "photo" => "https://angular.io/assets/images/tutorials/faa/phil-hearing-IYfp2Ixe9nM-unsplash.jpg",
            "availableUnits" => 4,
            "sqf" => "3,120 sq ft",
            "price" => "2.2 million"
        ]);
        DB::table('properties')->insert([
            "name"=> "The Hamptons Villa",
            "city" => "Long Island",
            "province" => "NY",
            "photo" => "https://angular.io/assets/images/tutorials/faa/r-architecture-GGupkreKwxA-unsplash.jpg",
            "availableUnits" => 1,
            "sqf" => "11,230 sq ft",
            "price" => "10.4 million"
        ]);
        DB::table('properties')->insert([
            "name"=> "California Dreaming",
            "city" => "San Diego",
            "province" => "CA",
            "photo" => "https://angular.io/assets/images/tutorials/faa/saru-robert-9rP3mxf8qWI-unsplash.jpg",
            "availableUnits" => 3,
            "sqf" => "9,450 sq ft",
            "price" => "5.4 million"
        ]);
        DB::table('properties')->insert([
            "name"=> "Providence Luxury Homes",
            "city" => "Providence",
            "province" => "RI",
            "photo" => "https://angular.io/assets/images/tutorials/faa/webaliser-_TPTXZd9mOo-unsplash.jpg",
            "availableUnits" => 3,
            "sqf" => "10,230 sq ft",
            "price" => "3.1 million"
        ]);
    }
}
