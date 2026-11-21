<?php

namespace WlSdk\Wl\Visit;

class VisitStatusGetRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The time zone key.
     *
     * `null` if not set then use default timezone client.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The temporary secret of the visit, which gives its status to a client that has no login or has no access of
     * its
     * own to the visit. It is given with the visit by the receipt of the purchase, see
     * {@link \WlSdk\Wl\Purchase\Receipt\PurchaseReceiptGetResponse::$a_purchase_item}, and expires in one hour. An
     * empty value, a
     * secret that has expired or a secret of another visit gives nothing: the access is checked as without it.
     * Only
     * the status is given by it, the visit cannot be changed, and the link to join a virtual visit is never given.
     * It is not the permanent secret of the visit, `rs_visit.s_secret`.
     *
     * The value is passed in the query of a GET request, so it may be written to the access logs of the web server
     * and
     * to the referrer of a page. The expiration in one hour and the access to one visit limit what a leaked value
     * gives.
     *
     * Example: `1767225600-0f3a...`, where the number is the time of the expiration in UTC, and the rest is the
     * signature in 64 hexadecimal digits.
     *
     * @var string|null
     */
    public ?string $s_status_secret = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_timezone' => $this->k_timezone,
            'k_visit' => $this->k_visit,
            's_status_secret' => $this->s_status_secret,
            ],
            static fn ($v) => $v !== null
        );
    }
}
