<?php

namespace WlSdk\Wl\Profile\Edit;

class EditGetRequest
{
    /**
     * Family role for a new user. One of {@link \WlSdk\RsFamilyRelationSid} constants.
     * Not `null` only for a case of relative registration.
     *
     * @var int|null
     * @see \WlSdk\RsFamilyRelationSid
     */
    public ?int $id_family_relation = null;

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
     * `true` to return all active, non-removed profile fields of the business regardless of entry-point filtering
     * (register source, level `DONT_ASK`, booking-and-purchase, and family-relation applies-to filters are
     * skipped).
     * The `id_level_*` values are still included in each field element of {@link
     * \WlSdk\Wl\Profile\Edit\EditGetResponse::$a_structure}.
     *
     * `false` (default) to apply the normal entry-point filtering based on {@link \WlSdk\Wl\Profile\Edit\Edit}.
     *
     * @var bool|null
     */
    public ?bool $is_field_all = null;

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
            'id_family_relation' => $this->id_family_relation,
            'id_register_source' => $this->id_register_source,
            'is_field_all' => $this->is_field_all,
            'is_staff' => $this->is_staff,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
