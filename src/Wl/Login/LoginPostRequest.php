<?php
namespace WlSdk\Wl\Login;

class LoginPostRequest
{
    /**
     * The height of the requested photo.
     *
     * @var int|null
     */
    public ?int $i_photo_height = null;

    /**
     * The width of the requested photo.
     *
     * @var int|null
     */
    public ?int $i_photo_width = null;

    /**
     * The key of the business. Users can be in multiple businesses.
     * This can be left as `null` to retrieve system-wide information.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of users to get information for serialized as JSON string.
     * 
     * `null` for mode of single user.
     *
     * @var string|null
     */
    public ?string $text_uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_photo_height' => $this->i_photo_height,
            'i_photo_width' => $this->i_photo_width,
            'k_business' => $this->k_business,
            'text_uid' => $this->text_uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
