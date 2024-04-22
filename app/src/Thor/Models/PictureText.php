<?php
namespace Thor\Models;

/**
 * Picture text model 
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
class PictureText extends \Thor\Models\BaseText {
    
    protected $table = 'picture_texts';
    
    protected $fillable = array(
  'album_id',
 
  'title',
 
  'is_translated',
 
  'language_id',
  'picture_id',
    );
    
    public static $rules = array(
    );

    /**
     *
     * @return Picture 
     */
    public function picture() {
        return $this->master();
    }
}
