<?php

namespace Marketplace\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class StoresModel extends Model
{
    protected $table = 'stores';

    protected $primaryKey = 'stor_id';

    protected $fillable = [
        'stor_name',
        'stor_description',
        'stor_phone',
        'stor_mobile_phone',
        'stor_slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(ProductsModel::class);
    }
}
