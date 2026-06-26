<?php

namespace WlSdk\Wl\Help\Popup;

class PopupGetRequest
{
    /**
     * A business in which a user requests help.
     * Primary key from RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User who asks for help.
     * Primary key from PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
