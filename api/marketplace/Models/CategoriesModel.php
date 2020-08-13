<?php

namespace Marketplace\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'cate_id';

    protected $fillable = [
        'cate_name',
        'cate_description',
        'cate_slug'
    ];

    public function products()
    {
        return $this->belongsToMany(ProductsModel::class, 'categories_products','cod_categories', 'cod_products');
    }
}
