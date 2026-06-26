<?php

namespace WlSdk\Wl\Login\Member\VaccinationStatus;

class VaccinationStatusPostRequest
{
    /**
     * Business key, primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key, primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The new vaccination status. One of {@link \WlSdk\Wl\Login\Member\VaccinationStatus\VaccinationStatusSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Login\Member\VaccinationStatus\VaccinationStatusSid
     */
    public ?int $id_vaccination_status = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'id_vaccination_status' => $this->id_vaccination_status,
            ],
            static fn ($v) => $v !== null
        );
    }
}
