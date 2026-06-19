<?php
namespace WlSdk\Wl\Location\Flag;

/**
 * Response from GET
 */
class FlagApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_flag = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_restrictions_multiple = null;

    /**
     * No description.
     *
     * @var array[]|null
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
        $this->a_flag = isset($data['a_flag']) ? (array)$data['a_flag'] : null;
        $this->a_restrictions_multiple = isset($data['a_restrictions_multiple']) ? (array)$data['a_restrictions_multiple'] : null;
        $this->a_restrictions_single = isset($data['a_restrictions_single']) ? (array)$data['a_restrictions_single'] : null;
        $this->is_flag = isset($data['is_flag']) ? (bool)$data['is_flag'] : null;
    }
}
