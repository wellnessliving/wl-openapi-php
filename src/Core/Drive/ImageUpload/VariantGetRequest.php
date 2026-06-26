<?php

namespace WlSdk\Core\Drive\ImageUpload;

class VariantGetRequest
{
    /**
     * Angle to rotate image. Positive - counterclockwise. Negative - clockwise.
     *
     * @var int|null
     */
    public ?int $i_rotate = null;

    /**
     * Protection string.
     * Used to prevent custom link generation on client side.
     *
     * @var string|null
     */
    public ?string $s_code = null;

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
            'i_rotate' => $this->i_rotate,
            's_code' => $this->s_code,
            's_link' => $this->s_link,
            ],
            static fn ($v) => $v !== null
        );
    }
}
