<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

class DeletePostResponseDeleteResult
{
    /**
     * `true` if client delete from all business, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_full_delete = null;

    /**
     * Business key when user left. Primary key in RsBusinessSql
     *
     * @var string|null
     */
    public ?string $k_business_left = null;

    public function __construct(array $data)
    {
        $this->is_full_delete = isset($data['is_full_delete']) ? (bool)$data['is_full_delete'] : null;
        $this->k_business_left = isset($data['k_business_left']) ? (string)$data['k_business_left'] : null;
    }
}
