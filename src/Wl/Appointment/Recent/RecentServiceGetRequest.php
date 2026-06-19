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
     * Type of service to return. One of [ServiceSid](#/components/schemas/Wl.Service.ServiceSid) constants.
     *
     * @var int|null
     */
    public ?int $id_service = null;

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
            'id_service' => $this->id_service,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
