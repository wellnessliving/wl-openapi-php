<?php

namespace WlSdk\Wl\Drive;

class ProductImageUploadGetRequest
{
    /**
     * Allows to give custom parameters which can be required for different types of images.
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * If `true`, the temporary image will be retrieved. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_temporary = null;

    /**
     * The image ID set in {@link \WlSdk\Core\Drive\ImageUpload\ImageUpload}.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The name of the class that manages this image.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'is_temporary' => $this->is_temporary,
            'k_id' => $this->k_id,
            's_class' => $this->s_class,
            ],
            static fn ($v) => $v !== null
        );
    }
}
