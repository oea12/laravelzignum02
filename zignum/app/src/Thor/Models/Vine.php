<?php
namespace Thor\Models;

use Thor\Models\Behaviours;

/**
 * Vine model 
 * @property string $vine 
 * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Vine extends \Thor\Models\Base  {
        
    protected $table = 'vines';
    
    protected $fillable = array(
  'vine',
 	'icon',
    );
    
    public static $rules = array(
    );
}
