<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

class AutomationRecipientStatusGetRequest
{
    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Member group key to filter recipients by.
     * Can be a primary key in the Sql table
     *  or Group::ISAAC_GROUP_KEY for the churn risk group.
     *
     * `null` if the request is filtered by an individual user instead of a member group.
     *
     * @var string|null
     */
    public ?string $k_member_group = null;

    /**
     * Recipient user key.
     *
     * `null` if the request is filtered by a member group instead of an individual user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            'k_member_group' => $this->k_member_group,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
