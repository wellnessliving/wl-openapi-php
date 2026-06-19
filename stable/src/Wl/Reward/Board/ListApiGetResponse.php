<?php
namespace WlSdk\Wl\Reward\Board;

/**
 * Response from GET
 */
class ListApiGetResponse
{
    /**
     * A list of UID items.
     *
     * @var int[]|null
     */
    public ?array $a_uid = null;

    public function __construct(array $data)
    {
        $this->a_uid = isset($data['a_uid']) ? (array)$data['a_uid'] : null;
    }
}
