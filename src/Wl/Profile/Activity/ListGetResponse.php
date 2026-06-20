<?php
namespace WlSdk\Wl\Profile\Activity;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * An array listing client activities, where each activity is provided as an ID number.
     * 
     * The order of items in this array is the order in which the elements should be displayed.
     *
     * @var string[]|null
     */
    public ?array $a_activity = null;

    public function __construct(array $data)
    {
        $this->a_activity = isset($data['a_activity']) ? (array)$data['a_activity'] : null;
    }
}
