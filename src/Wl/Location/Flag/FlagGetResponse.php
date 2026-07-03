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
     * Array, where keys are UIDs to be checked and values are same as
     * [FlagApi::$a_restrictions_single](/Wl/Location/Flag/Flag.json).
     * `null` if user is not flagged in the location.
     *
     * This field is set, if API gets [FlagApi::$a_uid](/Wl/Location/Flag/Flag.json) and not
     * [FlagApi::$uid](/Wl/Location/Flag/Flag.json) properties.
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
     * This field is set, if API gets [FlagApi::$uid](/Wl/Location/Flag/Flag.json) and not
     * [FlagApi::$a_uid](/Wl/Location/Flag/Flag.json) properties.
     *
     * @var FlagGetResponseRestrictionsSingle|null
     */
    public ?FlagGetResponseRestrictionsSingle $a_restrictions_single = null;

    /**
     * `true` if the user is flagged and can make purchases, but cannot make new reservations, `false` if
     * otherwise.
     *
     * `null` until loaded or when [FlagApi::$a_uid](/Wl/Location/Flag/Flag.json) was not set.
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
