<?php
namespace Thor\Models;

use Thor\Models\Behaviours;

/**
 * Cocktail model 
 * @property string $product 
 * @property string $name 
 * @property string $cocktailimage 
 * @property string $cocktailicon 
 * @property mediumtext $instructions 
 * @property string $product 
 * @property string $name 
 * @property mediumtext $instructions 
 * @property boolean $is_translated 
 * @property integer $language_id
 * @property integer $cocktail_id
  * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Cocktail extends \Thor\Models\Base implements Behaviours\ITranslatable, Behaviours\IImageable {
    use Behaviours\TTranslatable, Behaviours\TImageable;    
    protected $table = 'cocktails';
    
    protected $fillable = array(
  'product',
 
  'name',
 
  'cocktailimage',
 
  'cocktailicon',
 
  'instructions',
  'video_mp4',
  'video_ogg',
  'video_web'
 
    );
    
    public static $rules = array(
    );
}
