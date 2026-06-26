<?php

namespace WlSdk\Wl\Login\Add;

/**
 * Response from GET
 */
class ProfilePurchaseOptionGetResponse
{
    /**
     * User's active purchase options data.
     * For more details see RsProfilePassView::getPassData().
     *
     * Serialized with JSON.
     *
     * @var string|null
     */
    public ?string $json_promotion_active = null;

    public function __construct(array $data)
    {
        $this->json_promotion_active = isset($data['json_promotion_active']) ? (string)$data['json_promotion_active'] : null;
    }
}
