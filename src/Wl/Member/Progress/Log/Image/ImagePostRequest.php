<?php

namespace WlSdk\Wl\Member\Progress\Log\Image;

class ImagePostRequest
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

    /**
     * Save image command.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_command = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            's_command' => $this->s_command,
            ],
            static fn ($v) => $v !== null
        );
    }
}
