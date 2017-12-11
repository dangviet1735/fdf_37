<?php

use Faker\Generator as Faker;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Price;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\PriceProduct;
use App\Models\Rating;
use App\Models\Review;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'username' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(123123),
        'remember_token' => bcrypt(123123),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'role' => $faker->numberBetween(0, 1),
    ];
});

$factory->define(Category::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
    ];
});

$factory->define(Product::class, function (Faker $faker) {
    $categoryId = Category::pluck('id')->all();
    $userId = User::pluck('id')->all();

    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'image' => $faker->imageUrl($width = 200, $height = 200),
        'quanity' => $faker->numberBetween(1, 1000),
        'rating' => $faker->numberBetween(1, 5),
        'manufacturing_date' => $faker->date,
        'expiry_date' => $faker->date,
        'category_id' => $categoryId[array_rand($categoryId)],
        'user_id' => $userId[array_rand($userId)],
    ];
});

$factory->define(Price::class, function (Faker $faker) {

    return [
        'original_price' => $faker->numberBetween(1, 10000000),
        'discount' => $faker->numberBetween(0, 0.9),
        'unit_price' => $faker->numberBetween(1, 10000000),
    ];
});

$factory->define(PriceProduct::class, function (Faker $faker) {
    $productId = Product::pluck('id')->all();
    $priceId = Price::pluck('id')->all();

    return [
        'product_id' => $productId[array_rand($productId)],
        'price_id' => $priceId[array_rand($priceId)],
        'date' => $faker->date,
    ];
});

$factory->define(Rating::class, function (Faker $faker) {
    $userId = User::pluck('id')->all();
    $productId = Product::pluck('id')->all();

    return [
        'user_id' => $userId[array_rand($userId)],
        'product_id' => $productId[array_rand($productId)],
        'point' => $faker->numberBetween(1, 5),
    ];
});

$factory->define(Review::class, function (Faker $faker) {
    $userId = User::pluck('id')->all();
    $productId = Product::pluck('id')->all();

    return [
        'user_id' => $userId[array_rand($userId)],
        'product_id' => $productId[array_rand($productId)],
        'content' => $faker->text,
    ];
});

$factory->define(Order::class, function (Faker $faker) {
    $userId = User::pluck('id')->all();

    return [
        'user_id' => $userId[array_rand($userId)],
        'total_price' => $faker->numberBetween(1, 10000000),
        'total_quanity' => $faker->numberBetween(1, 1000),
        'status' => $faker->numberBetween(0, 1),
        'date_checkout' => $faker->date,  
    ];
});

$factory->define(OrderProduct::class, function (Faker $faker) {
    $productId = Product::pluck('id')->all();
    $orderId = Order::pluck('id')->all();

    return [
        'order_id' => $orderId[array_rand($orderId)],
        'product_id' => $productId[array_rand($productId)],
        'amount' => $faker->numberBetween(1, 1000),
    ];
});
