<?php
namespace WlSdk\Wl\Login;

class LoginGetRequest
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
     * The key of the user.
     * 
     * `null` on case when is walk-in client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_photo_height' => $this->i_photo_height,
            'i_photo_width' => $this->i_photo_width,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
