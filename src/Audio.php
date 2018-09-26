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

    public function __construct(string $name, ?string $attribute = null, ?string $disk = 'public', ?callable $storageCallback = null)
    {
        parent::__construct($name, $attribute, $disk, $storageCallback);

        $this->preview(function() {
            return $this->value
                ? Storage::disk($this->disk)->url($this->value)
                : null;
        });
    }
}
