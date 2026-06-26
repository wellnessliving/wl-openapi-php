<?php

namespace WlSdk\Wl\Toast;

class ToastPutRequest
{
    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Primary key of registered user in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Array of primary keys of toast messages in ToastSql table.
     *
     * @var string[]|null
     */
    public ?array $a_toast_list = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_toast_list' => $this->a_toast_list,
            ],
            static fn ($v) => $v !== null
        );
    }
}
