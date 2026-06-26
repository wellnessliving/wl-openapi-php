<?php

namespace WlSdk\Wl\Business\Location\Merchant\Share;

/**
 * Response from POST
 */
class SavePostResponse
{
    /**
     * Merchant sharing group ID.
     *
     * Primary key from GroupSql table.
     *
     * `null` to create new group.
     *
     * @var string|null
     */
    public ?string $k_merchant_share_group = null;

    public function __construct(array $data)
    {
        $this->k_merchant_share_group = isset($data['k_merchant_share_group']) ? (string)$data['k_merchant_share_group'] : null;
    }
}
