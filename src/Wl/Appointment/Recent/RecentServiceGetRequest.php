<?php
namespace WlSdk\Wl\Appointment\Recent;

class RecentServiceGetRequest
{
    /**
     * Count of last booked services to return. Default value is 5.
     *
     * @var int|null
     */
    public ?int $i_visit = null;

    /**
     * Type of service to return. One of {@link \WlSdk\Wl\Service\ServiceSid} constants.
     *
     * @var \WlSdk\Wl\Service\ServiceSid|null
     */
    public ?\WlSdk\Wl\Service\ServiceSid $id_service = null;

    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_visit' => $this->i_visit,
            'id_service' => $this->id_service?->value,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
