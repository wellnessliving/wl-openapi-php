<?php

namespace WlSdk\Wl\Classes\Virtual;

class NotificationGetRequest
{
    /**
     * Key of the business to which the closed notification modal window belongs.
     *
     * Primary key of the RsBusinessSql table.
     *
     * `null` if key of the business is not known (may only occur in legacy applications).
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the visit whose modal is being dismissed.
     * Primary key of the RsVisitSql table.
     *
     * `null` if this value did not arrive from the client application.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Key of the user that is dismissing the modal.
     *
     * `null` if this value did not arrive from the client application.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
