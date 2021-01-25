<?php


require __DIR__ . '/../vendor/autoload.php';

function dbConnect()
{
    try {
        return new PDO("{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

$faker = Faker\Factory::create('fr_FR'); // create a French faker
for ($i = 0; $i < 10; $i++) {

    $first_name =$faker->firstName();
    $last_name = $faker->lastName();
    $created_at = $faker->dateTime();
    $updated_at = $faker->dateTime();
    $email = $faker->email();
    $password = $faker->password();


    echo $faker->firstName, "\n";


    $db = dbConnect();

    $query = $db->prepare("INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES( :first_name, :last_name, :email, :password, :created_at, :updated_at)");
    $result = $query->execute([
        "first_name" => $first_name,
        "last_name" => $last_name,
        "email" => $email,
        "password" => $password,
        "created_at" => $created_at,
        "updated_at" => $updated_at,
    ]);
}





