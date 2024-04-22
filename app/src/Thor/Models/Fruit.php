<?php
namespace Thor\Models;

use Thor\Models\Behaviours;

/**
 * Fruit model 
 * @property string $title 
 * @property string $icon 
 * @property string $title 
 * @property boolean $is_translated 
 * @property integer $language_id
 * @property integer $fruit_id
  * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Fruit extends \Thor\Models\Base implements Behaviours\ITranslatable, Behaviours\IImageable {
    use Behaviours\TTranslatable, Behaviours\TImageable;    
    protected $table = 'fruits';
    
    protected $fillable = array(
  'title',
 
  'icon',
 
    );
    
    public static $rules = array();
}
