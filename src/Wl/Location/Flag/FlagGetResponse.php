<?php
namespace WlSdk\Wl\Location\Flag;

/**
 * Response from GET
 */
class FlagGetResponse
{
    /**
     * No description.
     *
     * @var FlagGetResponseFlag[]|null
     */
    public ?array $a_flag = null;

    /**
     * No description.
     *
     * @var FlagGetResponseRestrictionsMultiple[]|null
     */
    public ?array $a_restrictions_multiple = null;

    /**
     * No description.
     *
     * @var FlagGetResponseRestrictionsSingle[]|null
     */
    public ?array $a_restrictions_single = null;

    /**
     * `true` if the user is flagged and can make purchases, but cannot make new reservations, `false` if
     * otherwise.
     * 
     * `null` until loaded or when `a_uid` was not set.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    public function __construct(array $data)
    {
        $this->a_flag = isset($data['a_flag']) ? array_map(static fn($item) => new FlagGetResponseFlag((array)$item), (array)$data['a_flag']) : null;
        $this->a_restrictions_multiple = isset($data['a_restrictions_multiple']) ? array_map(static fn($item) => new FlagGetResponseRestrictionsMultiple((array)$item), (array)$data['a_restrictions_multiple']) : null;
        $this->a_restrictions_single = isset($data['a_restrictions_single']) ? array_map(static fn($item) => new FlagGetResponseRestrictionsSingle((array)$item), (array)$data['a_restrictions_single']) : null;
        $this->is_flag = isset($data['is_flag']) ? (bool)$data['is_flag'] : null;
    }
}
