<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

class DialogListGetRequest
{
    /**
     * The date with time of the last sent SMS.
     * If date is set the API returns dialog list where date last SMS is less than this date.
     * If date isn't set the API returns the last dialog list.
     *
     * @var string|null
     */
    public ?string $dtl_last_activity = null;

    /**
     * Key of business for which need to get list of dialogs.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * String with filter criteria.
     *
     * @var string|null
     */
    public ?string $s_filter = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtl_last_activity' => $this->dtl_last_activity,
            'k_business' => $this->k_business,
            's_filter' => $this->s_filter,
            ],
            static fn ($v) => $v !== null
        );
    }
}
