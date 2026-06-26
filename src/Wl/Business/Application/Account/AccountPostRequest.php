<?php

namespace WlSdk\Wl\Business\Application\Account;

class AccountPostRequest
{
    /**
     * ID of distribution provider (is directly related to operation system) to save data for.
     * One of {@link \WlSdk\Core\Spa\OsSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Spa\OsSid
     */
    public ?int $id_os = null;

    /**
     * ID of business to save data for. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Account login to be saved.
     *
     * @var string|null
     */
    public ?string $s_login = null;

    /**
     * Account password to be saved.
     *
     * @var string|null
     */
    public ?string $s_password = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_os' => $this->id_os,
            'k_business' => $this->k_business,
            's_login' => $this->s_login,
            's_password' => $this->s_password,
            ],
            static fn ($v) => $v !== null
        );
    }
}
