<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Sep 2018 18:17:24 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Album
 * 
 * @property int $id_album
 * @property string $nom_album
 * @property string $visibilite_abum
 * @property string $type_album
 * 
 * @property \Illuminate\Database\Eloquent\Collection $eleves
 * @property \Illuminate\Database\Eloquent\Collection $media
 *
 * @package App\Models
 */
class Album extends Eloquent
{
	protected $table = 'album';
	protected $primaryKey = 'id_album';
	public $timestamps = false;

	protected $fillable = [
		'nom_album',
		'visibilite_abum',
		'type_album'
	];
	
	public function medias()
	{
		return $this->hasMany(\App\Models\Medium::class, 'id_album');
	}
}
