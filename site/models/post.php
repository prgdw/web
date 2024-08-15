<?php

use Kirby\Cms\Page;
use Kirby\Uuid\Uuid;

class PostPage extends Page
{
    public static function create(array $props): Page
    {
        $uuid = Uuid::generate(8);
        $props['slug'] =  $uuid . '-' . $props['slug'];
        
        return parent::create($props);
    }

    public function cover()
    {
        return $this->content()->cover()->toFile() ?? $this->image();
    }

    public function published($format = null)
    {
        return parent::date()->toDate($format ?? 'd MMMM yyyy');
    }

    public function authorName()
    {
        $author = $this->author()->toUser();

        if ($author->name()->toString()) {
            $name = $author->name();
        } else {
            $name = $author->role()->title();
        }

        return ucfirst($name);
    }
}
