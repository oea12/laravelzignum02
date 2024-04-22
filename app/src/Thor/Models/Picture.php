<?php
namespace Thor\Models;

use Thor\Models\Behaviours;

/**
 * Picture model 
 * @property int $album_id 
 * @property string $title 
 * @property string $picture 
 * @property int $album_id 
 * @property string $title 
 * @property boolean $is_translated 
 * @property integer $language_id
 * @property integer $picture_id
  * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Picture extends \Thor\Models\Base implements Behaviours\IImageable, Behaviours\ITranslatable {
	use Behaviours\TImageable, Behaviours\TTranslatable;    
	protected $table = 'pictures';

	protected $fillable = array(
		'album_id',
		'alt',
		'title',

		'picture',

		'alt_en',
		'title_en'

		);

	public static $rules = array(
		);
}
