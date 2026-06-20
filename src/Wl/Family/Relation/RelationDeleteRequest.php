<?php
namespace WlSdk\Wl\Family\Relation;

class RelationDeleteRequest
{
    /**
     * ID of the user behavior flow.
     * One of {@link \WlSdk\Wl\User\Tracking\FlowSid} constants.
     *
     * @var \WlSdk\Wl\User\Tracking\FlowSid|null
     */
    public ?\WlSdk\Wl\User\Tracking\FlowSid $id_flow = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user whose relationships are being assessed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The key of the related user who `uid` must be removed.
     *
     * @var string|null
     */
    public ?string $uid_delete = null;

    /**
     * ID of source mode.
     * One of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var \WlSdk\Wl\Mode\ModeSid|null
     */
    public ?\WlSdk\Wl\Mode\ModeSid $id_mode = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_flow' => $this->id_flow?->value,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'uid_delete' => $this->uid_delete,
            'id_mode' => $this->id_mode?->value,
            ],
            static fn($v) => $v !== null
        );
    }
}
