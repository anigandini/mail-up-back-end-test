<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $image
 * @property $brand
 * @property $price
 * @property $price_sale
 * @property $category
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name' => 'required',
		'description' => 'required',
		'image' => 'required',
		'brand' => 'required',
		'price' => 'required',
		'price_sale' => 'required',
		'category' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','image','brand','price','price_sale','category','stock'];



}
