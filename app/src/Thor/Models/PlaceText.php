<?php
namespace Thor\Models;

/**
 * Place text model 
 * @property string $title 
 * @property string $icon 
 * @property string $title 
 * @property boolean $is_translated 
 * @property integer $language_id
 * @property integer $place_id
 * @property timestamp $created_at
 * @property timestamp $updated_at 
 */
class PlaceText extends \Thor\Models\BaseText {
    
    protected $table = 'place_texts';
    
    protected $fillable = array(
  'title',
 
  'is_translated',
 
  'language_id',
  'place_id',
    );
    
    public static $rules = array();

    /**
     *
     * @return Place 
     */
    public function place() {
        return $this->master();
    }
}
