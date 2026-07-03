<?php

namespace WlSdk\Core\Drive\ImageUpload;

class ImageUploadTemporaryPostRequest
{
    /**
     * The key of the image within {@link \WlSdk\Core\Drive\ImageUpload\ImageUploadTemporary}.
     *
     * For example, for a user's photo, specify the user's key here.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The name of the class that manages this image.
     *
     * For example, for a user's photo, specify the string `PassportLoginImage` here.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * The image to be uploaded.
     *
     * @var string|null
     */
    public ?string $f_image = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_id' => $this->k_id,
            's_class' => $this->s_class,
            'f_image' => $this->f_image,
            ],
            static fn ($v) => $v !== null
        );
    }
}
