<?php

namespace WlSdk\Wl\Profile\Rank;

/**
 * Response from GET
 */
class ProfileRankGetResponse
{
    /**
     * Promotion date on belts.
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $dtu_promotion_date = null;

    public function __construct(array $data)
    {
        $this->dtu_promotion_date = isset($data['dtu_promotion_date']) ? (string)$data['dtu_promotion_date'] : null;
    }
}
