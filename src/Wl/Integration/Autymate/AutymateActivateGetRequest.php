<?php

namespace WlSdk\Wl\Integration\Autymate;

class AutymateActivateGetRequest
{
    /**
     * The mode of the request.
     *
     * One of {@link \WlSdk\Wl\Integration\Autymate\AutymateAccessModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Integration\Autymate\AutymateAccessModeSid
     */
    public ?int $id_mode = null;

    /**
     * The new status of the enrollment. If `0`, the current status is returned.
     *
     * One of {@link \WlSdk\Wl\Integration\Autymate\AutymateStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Integration\Autymate\AutymateStatusSid
     */
    public ?int $id_status = null;

    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The randomly generated 32 character string used to authenticate Autymate requests for the business.
     *
     * @var string|null
     */
    public ?string $s_guid = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mode' => $this->id_mode,
            'id_status' => $this->id_status,
            'k_business' => $this->k_business,
            's_guid' => $this->s_guid,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
