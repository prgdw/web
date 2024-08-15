<?php

use Kirby\Cms\Page;
use Kirby\Uuid\Uuid;

class AlbumPage extends Page
{
    public static function create(array $props): Page
    {
        $uuid = Uuid::generate(8);
        $props['slug'] =  $uuid . '-' . $props['slug'];
        
        return parent::create($props);
    }
    
    public function cover()
    {
        return $this->image();
    }

    public function published($format = null)
    {
        return parent::date()->toDate($format ?? 'd MMMM yyyy');
    }
}
