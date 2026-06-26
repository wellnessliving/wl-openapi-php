<?php

namespace WlSdk\Wl\Drive;

class ProductImageCopyTemporaryPostRequest
{
    /**
     * Allows to give custom parameters which can be required for different types of images.
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * Image link.
     *
     * @var string|null
     */
    public ?string $s_link = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            's_link' => $this->s_link,
            ],
            static fn ($v) => $v !== null
        );
    }
}
