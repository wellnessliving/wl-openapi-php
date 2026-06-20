<?php

namespace WlSdk\Wl\Promotion\Index;

class PromotionIndexGetRequest
{
    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The program type ID, which will be one of the {@link \WlSdk\RsProgramTypeSid} constants.
     *
     * `0` to not filter Purchase Options with type of the Purchase Option.
     *
     * @var int|null
     */
    public ?int $id_program_type = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'id_program_type' => $this->id_program_type,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
