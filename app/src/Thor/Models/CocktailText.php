<?php
namespace Thor\Models;

/**
 * Cocktail text model 
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
class CocktailText extends \Thor\Models\BaseText {
    
    protected $table = 'cocktail_texts';
    
    protected $fillable = array(
  'product',
 
  'name',
 
  'instructions',
 
  'is_translated',
 
  'language_id',
  'cocktail_id',
    );
    
    public static $rules = array(
    );

    /**
     *
     * @return Cocktail 
     */
    public function cocktail() {
        return $this->master();
    }
}
