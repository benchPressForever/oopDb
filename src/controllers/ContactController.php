<?php

namespace Msi\Ooptop\controllers;

use Faker\Factory;

class ContactController extends Controller
{
    public function actionIndex()
    {
        $faker = Factory::create();
        echo $this->render('contacts/contact', [
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
        ]);
    }


}