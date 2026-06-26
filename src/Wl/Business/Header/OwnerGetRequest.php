<?php

namespace WlSdk\Wl\Business\Header;

class OwnerGetRequest
{
    /**
     * The key of the business for which you want to get header information.
     *
     * As a result, this field may be empty. In this case, the location key will be setted.
     *
     * Primary key from RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user key for which information will be loaded.
     *
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
