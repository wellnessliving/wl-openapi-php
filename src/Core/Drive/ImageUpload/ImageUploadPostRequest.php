<?php
namespace WlSdk\Core\Drive\ImageUpload;

class ImageUploadPostRequest
{
    /**
     * Allows to give custom parameters which can be required for different types of images.
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * The name of the class that manages this image.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * A list of image IDs set in `s_class`, serialized using JSON.
     * 
     * This will be `null` if there's no data being sent by the client.
     *
     * @var string|null
     */
    public ?string $text_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            's_class' => $this->s_class,
            'text_id' => $this->text_id,
            ],
            static fn($v) => $v !== null
        );
    }
}
