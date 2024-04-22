<?php
namespace Thor\Models;

/**
 * Companion text model 
 * @property string $title 
 * @property string $icon 
 * @property string $title 
 * @property boolean $is_translated 
 * @property integer $language_id
 * @property integer $companion_id
 * @property timestamp $created_at
 * @property timestamp $updated_at 
 */
class CompanionText extends \Thor\Models\BaseText {
    
    protected $table = 'companion_texts';
    
    protected $fillable = array(
  'title',
  'icon_en',
  'is_translated',
 
  'language_id',
  'companion_id',
    );
    
    public static $rules = array();

    /**
     *
     * @return Companion 
     */
    public function companion() {
        return $this->master();
    }
}
