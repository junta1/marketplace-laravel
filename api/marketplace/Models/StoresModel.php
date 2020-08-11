<?php

namespace Marketplace\Models;

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
}
