<?php

namespace WlSdk\Wl\Log;

class LogBusinessDataGetRequest
{
    /**
     * Business key.
     *
     * Primary key from RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Log key.
     *
     * Primary key from DataSql table.
     *
     * @var string|null
     */
    public ?string $k_log = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_log' => $this->k_log,
            ],
            static fn ($v) => $v !== null
        );
    }
}
