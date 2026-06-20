<?php

namespace WlSdk\Wl\Profile\Edit;

class EditGetRequest
{
    /**
     * Registration source ID.
     * One of {@link \WlSdk\Wl\Profile\RegisterSourceSid} constants.
     *
     * Used only to register new clients.
     * * If the client is already authorized, the field value will not be used.
     * * If the client is not authorized and no value is set, {@link \WlSdk\Wl\Profile\RegisterSourceSid} will be
     * used.
     *
     * @var int|null
     * @see \WlSdk\Wl\Profile\RegisterSourceSid
     */
    public ?int $id_register_source = null;

    /**
     * Indicates whether to display the form as a user or as a staff member.
     * Staff members may have access to different fields than the user.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * The key of the business you're editing.
     *
     * An empty value will return the system-wide fields.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user to edit.
     *
     * If empty, an empty form will be displayed to add a new user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_register_source' => $this->id_register_source,
            'is_staff' => $this->is_staff,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
