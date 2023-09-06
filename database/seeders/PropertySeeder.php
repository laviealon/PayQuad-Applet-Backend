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
            "id"=> 0,
            "name"=> "Classic Beach House",
            "city" => "Vancouver",
            "province" => "BC",
            "photo" => "https://angular.io/assets/images/tutorials/faa/bernard-hermant-CLKGGwIBTaY-unsplash.jpg",
            "availableUnits" => 1600000,
            "wifi" => true,
            "laundry" => true
        ]);
        DB::table('properties')->insert([
            "id"=> 1,
            "name"=> "Acme Fresh Start Housing",
            "city" => "Chicago",
            "province" => "IL",
            "photo" => "https://angular.io/assets/images/tutorials/faa/brandon-griggs-wR11KBaB86U-unsplash.jpg",
            "availableUnits" => 4,
            "wifi" => true,
            "laundry" => true
        ]);
        DB::table('properties')->insert([
            "id"=> 2,
            "name"=> "Acme Fresh Start Housing",
            "city" => "Chicago",
            "province" => "IL",
            "photo" => "https://angular.io/assets/images/tutorials/faa/ian-macdonald-W8z6aiwfi1E-unsplash.jpg",
            "availableUnits" => 4,
            "wifi" => true,
            "laundry" => true
        ]);
        DB::table('properties')->insert([
            "id"=> 3,
            "name"=> "Acme Fresh Start Housing",
            "city" => "Chicago",
            "province" => "IL",
            "photo" => "https://angular.io/assets/images/tutorials/faa/krzysztof-hepner-978RAXoXnH4-unsplash.jpg",
            "availableUnits" => 4,
            "wifi" => true,
            "laundry" => true
        ]);
        DB::table('properties')->insert([
            "id"=> 4,
            "name"=> "Acme Fresh Start Housing",
            "city" => "Chicago",
            "province" => "IL",
            "photo" => "https://angular.io/assets/images/tutorials/faa/r-architecture-JvQ0Q5IkeMM-unsplash.jpg",
            "availableUnits" => 4,
            "wifi" => true,
            "laundry" => true
        ]);
        DB::table('properties')->insert([
            "id"=> 5,
            "name"=> "Acme Fresh Start Housing",
            "city" => "Chicago",
            "province" => "IL",
            "photo" => "https://angular.io/assets/images/tutorials/faa/phil-hearing-IYfp2Ixe9nM-unsplash.jpg",
            "availableUnits" => 4,
            "wifi" => true,
            "laundry" => true
        ]);
        DB::table('properties')->insert([
            "id"=> 6,
            "name"=> "Acme Fresh Start Housing",
            "city" => "Chicago",
            "province" => "IL",
            "photo" => "https://angular.io/assets/images/tutorials/faa/r-architecture-GGupkreKwxA-unsplash.jpg",
            "availableUnits" => 4,
            "wifi" => true,
            "laundry" => true
        ]);
        DB::table('properties')->insert([
            "id"=> 7,
            "name"=> "Acme Fresh Start Housing",
            "city" => "Chicago",
            "province" => "IL",
            "photo" => "https://angular.io/assets/images/tutorials/faa/saru-robert-9rP3mxf8qWI-unsplash.jpg",
            "availableUnits" => 4,
            "wifi" => true,
            "laundry" => true
        ]);
        DB::table('properties')->insert([
            "id"=> 8,
            "name"=> "Acme Fresh Start Housing",
            "city" => "Chicago",
            "province" => "IL",
            "photo" => "https://angular.io/assets/images/tutorials/faa/webaliser-_TPTXZd9mOo-unsplash.jpg",
            "availableUnits" => 4,
            "wifi" => true,
            "laundry" => true
        ]);
    }
}
