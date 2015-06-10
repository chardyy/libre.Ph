<?php

class Product extends \Eloquent {
	protected $fillable = ['product_name', 'user_id', 'category_id', 'product_details'];

	protected $table = 'products';
}