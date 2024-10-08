<?php

namespace Database\Seeders;

use App\Models as models;
use App\Models\Building;
use App\Models\Circuit;
use App\Models\Event;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        models\User::insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
        ]);

        // models\Visitor::insert([
        //     [
        //         "full_name" => "Ahmed Alaoui",
        //         "email" => "ahmed@alaoui.com",
        //         "token" => "user_2h8hFGAhZ0PSDW5ZXhwshjotNPAC",
        //         "gender" => "male",
        //         "role" => "admin",
        //         "avatar" => 0,
        //         "created_at" => Carbon::now(),
        //     ],
        //     [
        //         "full_name" => "akram Alaoui",
        //         "email" => "akram@alaoui.com",
        //         "token" => "user_2h8hFGAhZ0PSDW5ZXhwshjotNAC",
        //         "gender" => "male",
        //         "role" => "admin",
        //         "avatar" => 1,
        //         "created_at" => Carbon::now(),
        //     ],
        //     [
        //         "full_name" => "Mustapha Benchar",
        //         "email" => "mustaphabenchar@gmail.com",
        //         "token" => "user_2h8hFGAhZ0PSDW5ZXhwshjotNAC",
        //         "gender" => "male",
        //         "role" => "user",
        //         "avatar" => 3,
        //         "created_at" => Carbon::now(),
        //     ],
        //     [
        //         "full_name" => "Salma Alaoui",
        //         "email" => "salma@alaoui.com",
        //         "token" => "user_2h8hFGAhZ0PSDW5ZXhwshjotNAC",
        //         "gender" => "female",
        //         "role" => "admin",
        //         "avatar" => 2,
        //         "created_at" => Carbon::now(),
        //     ],
        //     [
        //         "full_name" => "oussama",
        //         "email" => "4fefaa6899@emaildbox.pro",
        //         "token" => "user_2kHRgzyM4tvCiaqFz0fnNaKnlO6",
        //         "gender" => "male",
        //         "role" => "admin",
        //         "avatar" => 0,
        //         "created_at" => Carbon::now(),
        //     ],
        // ]);


        // models\Circuit::insert([
        //     [
        //         "name" => "Bd Mohammed V",
        //         "alternative" => "Bd Mohammed V Casablanca 20250",
        //         "description" => "some text for the circuit Mohamed V description and much more",
        //         "audio" => "test_audio.mp3",
        //         'published' => true
        //     ],
        //     [
        //         "name" => "Place Mohammed V",
        //         "alternative" => "Place Mohammed V Casablanca 20250",
        //         "description" => "some text for the circuit Mohamed V description and much more",
        //         "audio" => "test_audio.mp3",
        //         'published' => true
        //     ]
        // ]);

        // models\Building::insert([
        //     [
        //         "circuit_id" => 1,
        //         "name" => "jama3",
        //         "description" => "anthor text for the building 1 description and much more",
        //         "audio" => "test_audio.mp3",
        //         "latitude" => 33.593559,
        //         "longitude" => -7.606806,
        //     ],
        //     [
        //         "circuit_id" => 1,
        //         "name" => "medina",
        //         "description" => "anthor text for the building 1 description and much more",
        //         "audio" => "test_audio.mp3",
        //         "latitude" => 33.594651,
        //         "longitude" => -7.613034,
        //     ],
        //     [
        //         "circuit_id" => 1,
        //         "name" => "sa7t fna",
        //         "description" => "anthor text for the building 1 description and much more",
        //         "audio" => "test_audio.mp3",
        //         "latitude" => 33.595991,
        //         "longitude" => -7.617869,
        //     ],
        //     [
        //         "circuit_id" => 2,
        //         "name" => "sa7a",
        //         "description" => "anthor text for the building 1 description and much more",
        //         "audio" => "test_audio.mp3",
        //         "latitude" => 33.592974,
        //         "longitude" => -7.617694,
        //     ]
        // ]);

        //  models\Event::insert([[
        //      'title' => "Les Journées du Patrimoine de Casablanca 13ème édition",
        //      'description' => "La 13e édition des Journées du Patrimoine de Casablanca auront lieu du 13 au 19 mai 2024. Une invitation à voyager dans le temps et l'espace, révélant la splendeur architecturale et urbanistique de la métropole à travers 5 circuits guidés et une programmation culturelle d'une richesse inégalée, sous le thème évocateur de \"Casablanca, patrimoine en mouvement\".",
        //      'start' => Carbon::now(),
        //      'end' => Carbon::now(),
        //      'latitude' => 33.426969,
        //      'longitude' => -7.123412,
        //  ], [
        //      'title' => "Lorem",
        //     'description' => "révélant la splendeur architecturale et urbanistique de la métropole à travers 5 circuits guidés et une programmation culturelle d'une richesse inégalée, sous le thème évocateur de \"Casablanca, patrimoine en mouvem",
        //     'start' => Carbon::now(),
        //     'end' => Carbon::now(),
        //     'latitude' => 33.432113,
        //     'longitude' => -7.552314,
        // ]]);

        // DB::table('images')->insert([
        //     [
        //         'path' => 'image1.jpg',
        //         'imagable_type' => Building::class,
        //         'imagable_id' => 1
        //     ],
        //     [
        //         'path' => 'image2.jpg',
        //         'imagable_type' => Building::class,
        //         'imagable_id' => 2
        //     ],
        //     [
        //         'path' => 'image3.jpg',
        //         'imagable_type' => Building::class,
        //         'imagable_id' => 3
        //     ],
        //     [
        //         'path' => 'image4.jfif',
        //         'imagable_type' => Building::class,
        //         'imagable_id' => 4
        //     ],
        //     [
        //         'path' => 'image1.jpg',
        //         'imagable_type' => Circuit::class,
        //         'imagable_id' => 1
        //     ],
        //     [
        //         'path' => 'image2.jpg',
        //         'imagable_type' => Circuit::class,
        //         'imagable_id' => 1
        //     ],
        //     [
        //         'path' => 'image3.jpg',
        //         'imagable_type' => Circuit::class,
        //         'imagable_id' => 1
        //     ],
        //     [
        //         'path' => 'image2.jpg',
        //         'imagable_type' => Circuit::class,
        //         'imagable_id' => 2
        //     ],
        //     [
        //         'path' => 'image3.jpg',
        //         'imagable_type' => Circuit::class,
        //         'imagable_id' => 2
        //     ],
        //     [
        //         'path' => 'image4.jfif',
        //         'imagable_type' => Circuit::class,
        //         'imagable_id' => 2
        //     ],
        //     [
        //         'path' => 'image1.jpg',
        //         'imagable_type' => Event::class,
        //         'imagable_id' => 1
        //     ],
        //     [
        //         'path' => 'image2.jpg',
        //         'imagable_type' => Event::class,
        //         'imagable_id' => 1
        //     ],
        //     [
        //         'path' => 'image3.jpg',
        //         'imagable_type' => Event::class,
        //         'imagable_id' => 2
        //     ],
        //     [
        //         'path' => 'image4.jfif',
        //         'imagable_type' => Event::class,
        //         'imagable_id' => 2
        //     ],
        // ]);

        // models\Path::insert([
        //     [
        //         "circuit_id" => 1,
        //         "latitude" => 33.593601,
        //         "longitude" => -7.606634
        //     ],
        //     [
        //         "circuit_id" => 1,
        //         "latitude" => 33.593741,
        //         "longitude" => -7.608557
        //     ],
        //     [
        //         "circuit_id" => 1,
        //         "latitude" => 33.594108,
        //         "longitude" => -7.610533
        //     ],
        //     [
        //         "circuit_id" => 1,
        //         "latitude" => 33.594651,
        //         "longitude" => -7.613034
        //     ],
        //     [
        //         "circuit_id" => 1,
        //         "latitude" => 33.595325,
        //         "longitude" => -7.616009
        //     ],
        //     [
        //         "circuit_id" => 1,
        //         "latitude" => 33.595500,
        //         "longitude" => -7.617144
        //     ],
        //     [
        //         "circuit_id" => 1,
        //         "latitude" => 33.595991,
        //         "longitude" => -7.617869
        //     ],
        //     [
        //         "circuit_id" => 2,
        //         "latitude" => 33.592974,
        //         "longitude" => -7.617694
        //     ],
        //     [
        //         "circuit_id" => 2,
        //         "latitude" => 33.592849,
        //         "longitude" => -7.618040
        //     ],
        //     [
        //         "circuit_id" => 2,
        //         "latitude" => 33.592580,
        //         "longitude" => -7.618575
        //     ],
        //     [
        //         "circuit_id" => 2,
        //         "latitude" => 33.591644,
        //         "longitude" => -7.618890
        //     ],
        //     [
        //         "circuit_id" => 2,
        //         "latitude" => 33.590495,
        //         "longitude" => -7.619489
        //     ],
        //     [
        //         "circuit_id" => 2,
        //         "latitude" => 33.589982,
        //         "longitude" => -7.619726
        //     ],
        //     [
        //         "circuit_id" => 2,
        //         "latitude" => 33.587633,
        //         "longitude" => -7.621138
        //     ]
        // ]);
    }
}
