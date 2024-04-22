<?php
namespace Thor\Models;

use Thor\Models\Behaviours;

/**
 * Socialpicture model 
 * @property string $image 
 * @property string $url 
 * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Socialpictures extends \Thor\Models\Base implements Behaviours\IImageable {
    use Behaviours\TImageable;    
    protected $table = 'socialpictures';
    
    protected $fillable = array(
  'image',
 
  'url',
 
    );
    
    public static $rules = array(
    );
}
