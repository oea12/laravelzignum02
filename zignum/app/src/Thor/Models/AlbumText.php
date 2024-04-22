<?php
namespace Thor\Models;

/**
 * Album text model 
 * @property string $album_name 
 * @property text $description 
 * @property string $album_name 
 * @property text $description 
 * @property boolean $is_translated 
 * @property integer $language_id
 * @property integer $album_id
 * @property timestamp $created_at
 * @property timestamp $updated_at 
 */
class AlbumText extends \Thor\Models\BaseText {
    
    protected $table = 'album_texts';
    
    protected $fillable = array(
  'album_name',
 
  'description',
 
  'is_translated',
 
  'language_id',
  'album_id',
    );
    
    public static $rules = array(
    );

    /**
     *
     * @return Album 
     */
    public function album() {
        return $this->master();
    }
}
