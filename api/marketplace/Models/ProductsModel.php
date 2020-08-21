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
}
