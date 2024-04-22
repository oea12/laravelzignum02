<?php
namespace Thor\Models;

/**
 * Fruit text model 
 * @property string $title 
 * @property string $icon 
 * @property string $title 
 * @property boolean $is_translated 
 * @property integer $language_id
 * @property integer $fruit_id
 * @property timestamp $created_at
 * @property timestamp $updated_at 
 */
class FruitText extends \Thor\Models\BaseText {
    
    protected $table = 'fruit_texts';
    
    protected $fillable = array(
  'title',
 
  'is_translated',
 
  'language_id',
  'fruit_id',
    );
    
    public static $rules = array();

    /**
     *
     * @return Fruit 
     */
    public function fruit() {
        return $this->master();
    }
}
