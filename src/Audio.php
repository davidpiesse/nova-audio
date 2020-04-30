<?php

namespace Davidpiesse\Audio;

use Laravel\Nova\Fields\File;
use Illuminate\Support\Facades\Storage;

class Audio extends File
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'audio';

    public $textAlign = 'center';

    public $showOnIndex = true;

    public $expires = null;

    public function __construct($name, $attribute = null, $disk = 'public', $storageCallback = null, $expiration = null)
    {
        parent::__construct($name, $attribute, $disk, $storageCallback);

        $this->preview(function() {
            return $this->value
                ? Storage::disk($this->disk)->temporaryUrl($this->value, $this->expires ? now()->addHours($this->expires): null)
                : null;
        });
    }

    public function expires($expiration = null)
    {
        $this->expires = $expiration;
        
        return $this;
    }
}
