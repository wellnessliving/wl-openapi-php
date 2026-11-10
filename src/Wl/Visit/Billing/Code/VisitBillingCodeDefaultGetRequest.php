<?php

namespace WlSdk\Wl\Visit\Billing\Code;

class VisitBillingCodeDefaultGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the service of the visit being booked. Required if {@link
     * \WlSdk\Wl\Visit\Billing\Code\VisitBillingCodeDefault} is not
     * given, and not used otherwise. The service must belong to the business.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Key of an existing visit. Its service, staff member and client are taken from the visit. Empty string for a
     * visit
     * being booked: then they are given by {@link \WlSdk\Wl\Visit\Billing\Code\VisitBillingCodeDefault},
     * {@link \WlSdk\Wl\Visit\Billing\Code\VisitBillingCodeDefault} and {@link
     * \WlSdk\Wl\Visit\Billing\Code\VisitBillingCodeDefault}.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Key of the client of the visit being booked. Used only if {@link
     * \WlSdk\Wl\Visit\Billing\Code\VisitBillingCodeDefault} is not
     * given. Empty string if the client is not known yet: then no most used codes are returned.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    /**
     * Key of the staff member of the visit being booked. Required if {@link
     * \WlSdk\Wl\Visit\Billing\Code\VisitBillingCodeDefault} is
     * not given, and not used otherwise. The staff member must work in the business.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_service' => $this->k_service,
            'k_visit' => $this->k_visit,
            'uid_client' => $this->uid_client,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
