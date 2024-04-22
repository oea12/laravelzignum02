<?php
namespace Thor\Models;

use Thor\Models\Behaviours;

/**
 * Album model 
 * @property string $album_name 
 * @property text $description 
 * @property string $album_name 
 * @property text $description 
 * @property boolean $is_translated 
 * @property integer $language_id
 * @property integer $album_id
  * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Album extends \Thor\Models\Base implements Behaviours\ITranslatable {
	use Behaviours\TTranslatable;    
	protected $table = 'albums';

	protected $fillable = array(
		'album_name',

		'description',

		);

	public static $rules = array(
	);
}
