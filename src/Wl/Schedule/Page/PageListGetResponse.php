<?php
namespace WlSdk\Wl\Schedule\Page;

/**
 * Response from GET
 */
class PageListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
    }
}
