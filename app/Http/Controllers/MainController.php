<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\User;
use Faker\Factory;

class Advert1{}
class Advert2{}


class MainController extends Controller
{
    public function create() {
        $users = User::all();
        $articles = Article::all();
        $faker = Factory::create();

        $advert1 = new Advert1();
        $advert1->image = $faker->imageURL($width = 300, $height = 300);

        $advert2 = new Advert2();
        $advert2->image = $faker->imageURL($width = 150, $height = 550);

        $data = [
            'users' => $users,
            'articles' => $articles,
            'advert1' => [$advert1],
            'advert2' => [$advert2]
        ];

        return view('welcome', $data);
    }

}
