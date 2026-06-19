<?php
namespace WlSdk\Wl\Service\ServiceList;

/**
 * Response from GET
 */
class ListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_service = null;

    public function __construct(array $data)
    {
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
    }
}
