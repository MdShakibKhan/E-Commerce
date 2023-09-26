<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    static $blog, $image, $directory, $imageName, $imageNew;
    static function imageUrl($imagedata){
        self::$image = $imagedata->file('img');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'product-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    static function storeOProduct($req){
        $product = new Product();
        $product->title = $req->title;
        $product->description = $req->desp;
        $product->price = $req->price;
        $product->image = Product::imageUrl($req);
        $product->save();
    }
}
