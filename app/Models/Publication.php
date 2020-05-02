<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publication';
	protected $primaryKey = 'id_pub';
    public $timestamps = false;

    protected $casts = [
		'id_media' => 'int',
		'id_type_pub' => 'int',
    ];
    protected $dates = [
        'create_at',
        'update_at',
        'start_date_pub',
        'end_date_pub'
	];

    protected $fillable = [
		'title_pub',
        'resume_pub',
        'description_pub',
        'create_at',
        'update_at',
        'start_date_pub',
        'end_date_pub',
        'theme_pub',
        'edition_pub',
        'status_pub',
        'id_album',
        'id_type_pub'
    ];
    
    public function albums()
	{
		return $this->belongsTo(\App\Models\Album::class, 'id_album');
    }

    public function typePublications()
	{
		return $this->belongsTo(\App\Models\TypePublication::class, 'id_type_pub');
    }
    
}
