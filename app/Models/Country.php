<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'country';
	protected $primaryKey = 'id_cou';
    public $timestamps = false;
    protected $fillable = [
		'name_cou',
        'code_two_cou',
        'code_three_cou'
    ];
}
