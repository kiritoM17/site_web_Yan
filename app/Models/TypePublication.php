<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePublication extends Model
{
    protected $table = 'type_publication';
	protected $primaryKey = 'id_type_pub';
    public $timestamps = false;
    protected $fillable = [
		'title_type_pub',
		'description_type_pub'
    ];
    public function publications()
	{
		return $this->hasMany(\App\Models\TypePublication::class, 'id_type_pub');
    }
}
