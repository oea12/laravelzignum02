<?php
namespace Thor\Models;

use Thor\Models\Behaviours;

/**
 * Place model 
 * @property string $title 
 * @property string $icon 
 * @property string $title 
 * @property boolean $is_translated 
 * @property integer $language_id
 * @property integer $place_id
  * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Place extends \Thor\Models\Base implements Behaviours\ITranslatable, Behaviours\IImageable {
    use Behaviours\TTranslatable, Behaviours\TImageable;    
    protected $table = 'places';
    
    protected $fillable = array(
  'title',
 
  'icon',
 
    );
    
    public static $rules = array();
}
