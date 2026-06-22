<?php

namespace WlSdk\Wl\Business\Waiver;

class WaiverGetRequest
{
    /**
     * ID of business to get waiver for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Full username.
     * Used as a variable in a contract.
     * It may be set if user does not exist.
     *
     * @var string|null
     */
    public ?string $text_fullname = null;

    /**
     * User key for which the waiver is shown.
     * Used to fill the variables in the contract
     * Not necessarily if the user does not already exist. In this case, you need to set
     * [WaiverApi](/Wl/Business/Waiver/Waiver.json).
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_fullname' => $this->text_fullname,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
