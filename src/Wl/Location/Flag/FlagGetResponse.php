<?php

namespace WlSdk\Wl\Location\Flag;

/**
 * Response from GET
 */
class FlagGetResponse
{
    /**
     * Array with structure:
     * `null` until loaded or when `a_uid` was not set.
     *
     * @var FlagGetResponseFlag|null
     */
    public ?FlagGetResponseFlag $a_flag = null;

    /**
     * Array, where keys are UIDs to be checked and values are same as {@link
     * \WlSdk\Wl\Location\Flag\FlagGetResponse::$a_restrictions_single}.
     * `null` if user is not flagged in the location.
     *
     * This field is set, if API gets {@link \WlSdk\Wl\Location\Flag\Flag} and not {@link
     * \WlSdk\Wl\Location\Flag\Flag} properties.
     *
     * Keys are user keys.
     * Values are flag restriction arrays:
     *
     * @var FlagGetResponseRestrictionsMultiple|null
     */
    public ?FlagGetResponseRestrictionsMultiple $a_restrictions_multiple = null;

    /**
     * `null` if user is not flagged in the location.
     *
     * This field is set, if API gets {@link \WlSdk\Wl\Location\Flag\Flag} and not {@link
     * \WlSdk\Wl\Location\Flag\Flag} properties.
     *
     * @var FlagGetResponseRestrictionsSingle|null
     */
    public ?FlagGetResponseRestrictionsSingle $a_restrictions_single = null;

    /**
     * `true` if the user is flagged and can make purchases, but cannot make new reservations, `false` if
     * otherwise.
     *
     * `null` until loaded or when {@link \WlSdk\Wl\Location\Flag\Flag} was not set.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    public function __construct(array $data)
    {
        $this->a_flag = isset($data['a_flag']) ? new FlagGetResponseFlag((array)$data['a_flag']) : null;
        $this->a_restrictions_multiple = isset($data['a_restrictions_multiple']) ? new FlagGetResponseRestrictionsMultiple((array)$data['a_restrictions_multiple']) : null;
        $this->a_restrictions_single = isset($data['a_restrictions_single']) ? new FlagGetResponseRestrictionsSingle((array)$data['a_restrictions_single']) : null;
        $this->is_flag = isset($data['is_flag']) ? (bool)$data['is_flag'] : null;
    }
}
