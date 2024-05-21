<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "product";

    protected $primaryKey = "Id";

    protected $fillable = [
        "ProductType",
        "ProductCode",
        "ProductName",
        "description",
        "Quantity",
        "Note",
    ];
}
// class Product extends Model
// {
//     use HasFactory;

//     protected $table = "products";

//     protected $primaryKey = "id";

//     protected $fillable = [
//         "name",
//         "thumbnail",
//         "price",
//         "description",
//         "qty",
//         "category_id",
//     ];
    
// }
