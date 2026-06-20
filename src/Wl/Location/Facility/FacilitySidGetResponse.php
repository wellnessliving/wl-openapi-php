<?php
namespace WlSdk\Wl\Location\Facility;

/**
 * Response from GET
 */
class FacilitySidGetResponse
{
    /**
     * List of items. Keys are IDs, values are arrays with additional information:
     *
     * @var FacilitySidGetResponseList|null
     */
    public ?FacilitySidGetResponseList $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? new FacilitySidGetResponseList((array)$data['a_list']) : null;
    }
}
