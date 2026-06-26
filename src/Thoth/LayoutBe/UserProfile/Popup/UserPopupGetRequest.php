<?php

namespace WlSdk\Thoth\LayoutBe\UserProfile\Popup;

class UserPopupGetRequest
{
    /**
     * Whether this is a backend context.
     * `true` if backend, `false` if frontend.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Current frontend business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
