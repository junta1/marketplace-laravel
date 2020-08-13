<?php

namespace Marketplace\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = 'Products';

    protected $primaryKey = 'prod_id';

    protected $fillable = [
        'prod_name',
        'prod_description',
        'prod_body',
        'prod_price',
        'prod_slug',
        'cod_store',
    ];

    public function stores()
    {
        return $this->belongsTo(StoresModel::class, 'cod_store', 'stor_id');
    }

    public function categories()
    {
        return $this->belongsToMany(CategoriesModel::class, 'categories_products', 'cod_products', 'cod_categories');
    }
}
