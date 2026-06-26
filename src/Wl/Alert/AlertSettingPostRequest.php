<?php

namespace WlSdk\Wl\Alert;

class AlertSettingPostRequest
{
    /**
     * CID of alert. One of {@link \WlSdk\Wl\Alert\AlertAbstract} subclasses.
     *
     * @var int|null
     * @see \WlSdk\Wl\Alert\AlertAbstract
     */
    public ?int $cid_alert = null;

    /**
     * Determines whether the user wish to see all alerts, only their alerts, or none.
     * One of {@link \WlSdk\Wl\Alert\AlertReceiveSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Alert\AlertReceiveSid
     */
    public ?int $id_receive = null;

    /**
     * Determines whether the user wish to hear a sound when a new alert is added.
     *
     * @var bool|null
     */
    public ?bool $is_sound = null;

    /**
     * Key of the business to save alert settings in.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_alert' => $this->cid_alert,
            'id_receive' => $this->id_receive,
            'is_sound' => $this->is_sound,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
