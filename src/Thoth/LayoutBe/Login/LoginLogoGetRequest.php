<?php

namespace WlSdk\Thoth\LayoutBe\Login;

class LoginLogoGetRequest
{
    /**
     * Logo height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Logo width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Whether staff photo should be excluded.
     * `true` - staff photo should be excluded, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $not_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_height' => $this->i_height,
            'i_width' => $this->i_width,
            'not_staff' => $this->not_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
