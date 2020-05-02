<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Sep 2018 18:17:24 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Medium
 * 
 * @property int $id_media
 * @property string $nom_media
 * @property int $taille_media
 * @property string $mime_type
 * @property \Carbon\Carbon $date_pub_media
 * @property int $id_album
 * 
 * @property \App\Models\Album $album
 *
 * @package App\Models
 */
class Medium extends Eloquent
{
	protected $table = 'media';
	protected $primaryKey = 'id_media';
	public $timestamps = false;

	protected $casts = [
		'taille_media' => 'int',
		'id_album' => 'int'
	];

	protected $dates = [
		'date_pub_media'
	];

	protected $fillable = [
		'nom_media',
		'taille_media',
		'mime_type',
		'id_album'
	];

	public function albums()
	{
		return $this->belongsTo(\App\Models\Album::class, 'id_album');
	}
}
