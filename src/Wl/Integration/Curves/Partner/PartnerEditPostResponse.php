<?php

namespace WlSdk\Wl\Integration\Curves\Partner;

/**
 * Response from POST
 */
class PartnerEditPostResponse
{
    /**
     * If a partner is edited, its key is stored here.
     *
     * Primary key in PartnerSql table.
     *
     * `null` if a new partner should be created.
     * This value is required for edit and delete operations.
     *
     * @var string|null
     */
    public ?string $k_partner = null;

    public function __construct(array $data)
    {
        $this->k_partner = isset($data['k_partner']) ? (string)$data['k_partner'] : null;
    }
}
