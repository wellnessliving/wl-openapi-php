<?php

namespace WlSdk\Wl\Member\Progress\Log\Image;

class ImageDeleteRequest
{
    /**
     * Local date of the progress picture.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
