<?php

namespace WlSdk\Wl\Business\Franchise\Member;

class FranchiseMemberPutRequest
{
    /**
     * Key of the business, where we want to add client.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the user, which we want to add to the business.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
