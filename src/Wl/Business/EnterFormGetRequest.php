<?php

namespace WlSdk\Wl\Business;

class EnterFormGetRequest
{
    /**
     * Height of the logo.
     *
     * @var int|null
     */
    public ?int $i_logo_height = null;

    /**
     * Width of the logo.
     *
     * @var int|null
     */
    public ?int $i_logo_width = null;

    /**
     * Key of the business to which the application belongs.
     *
     * Can be empty, in this case current business from the session will be used.
     *
     * Primary key of the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Unique ID of application.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_logo_height' => $this->i_logo_height,
            'i_logo_width' => $this->i_logo_width,
            'k_business' => $this->k_business,
            's_application' => $this->s_application,
            ],
            static fn ($v) => $v !== null
        );
    }
}
