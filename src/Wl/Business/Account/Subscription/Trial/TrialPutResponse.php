<?php

namespace WlSdk\Wl\Business\Account\Subscription\Trial;

/**
 * Response from PUT
 */
class TrialPutResponse
{
    /**
     * New trial end date after extension.
     *
     * @var string|null
     */
    public ?string $dl_trial_end = null;

    /**
     * Number of days granted during trial extension.
     *
     * @var int|null
     */
    public ?int $i_trial_days = null;

    public function __construct(array $data)
    {
        $this->dl_trial_end = isset($data['dl_trial_end']) ? (string)$data['dl_trial_end'] : null;
        $this->i_trial_days = isset($data['i_trial_days']) ? (int)$data['i_trial_days'] : null;
    }
}
