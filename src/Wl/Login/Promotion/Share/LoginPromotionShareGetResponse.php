<?php

namespace WlSdk\Wl\Login\Promotion\Share;

/**
 * Response from GET
 */
class LoginPromotionShareGetResponse
{
    /**
     * List of family members with whom the purchased promotion can be shared. Each element has next structure:
     *
     * @var LoginPromotionShareGetResponseShareFamily|null
     */
    public ?LoginPromotionShareGetResponseShareFamily $a_share_family = null;

    public function __construct(array $data)
    {
        $this->a_share_family = isset($data['a_share_family']) ? new LoginPromotionShareGetResponseShareFamily((array)$data['a_share_family']) : null;
    }
}
