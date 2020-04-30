# Audio Field

An audio field for use in Laravel Nova.

![Audio Field](https://res.cloudinary.com/davidpiesse/image/upload/v1535659518/Screen_Shot_2018-08-30_at_20.39.01_lolimj.png)

For use when you are storing an audio file and want to listen to it from within Nova. It is built on the core File Field field type. See [here](https://nova.laravel.com/docs/1.0/resources/file-fields.html) for more info

Under the hood it uses thabsic HTML5 Audio tag. So MP3, WAV and OGG are supported :)

## Installation
```
composer require davidpiesse/nova-audio
```

To use the field add it to your Nova Resources file (such as User.php)
```php
use Davidpiesse\Audio\Audio;

public function fields(Request $request)
{
    return [
        ...
        Audio::make('Audio')->disk('public'),
        
        Audio::make('Audio', function() {
            return 'path-to-your-folder-on-s3'.$this->audio_file_name_from_model;
        })->disk('s3')
        ->expires(5),
        ...
    ];
}
```
