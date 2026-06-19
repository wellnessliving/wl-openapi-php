<?php
namespace WlSdk\Thoth\WlPay\Owner;

class OwnerGetRequest
{
    /**
     * Business key.
     * 
     * Primary key in RsBusinessSql.
     * `null` if not passed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of a user to show information for.
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
            static fn($v) => $v !== null
        );
    }
}
