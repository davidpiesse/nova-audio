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

    public function __construct($name, $attribute = null, $disk = 'public', $storageCallback = null)
    {
        parent::__construct($name, $attribute, $disk, $storageCallback);

        $this->preview(function() {
            return $this->value
                ? Storage::disk($this->disk)->url($this->value)
                : null;
        });
    }

    /**
     * Sets the preload property on the Audio tag to the given value
     * @param string $value the preload value. Can be: auto|metadata|none
     * @return $this
     */
    public function preload($value = 'auto')
    {
        return $this->withMeta(['preload' => $value]);
    }

    /**
     * Sets the autoplay property on the Audio tag to the given value
     * @param bool $value
     * @return $this
     */
    public function autoplay($value = true)
    {
        return $this->withMeta(['autoplay' => $value]);
    }
}
