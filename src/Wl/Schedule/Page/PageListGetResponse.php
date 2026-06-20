<?php
namespace WlSdk\Wl\Schedule\Page;

/**
 * Response from GET
 */
class PageListGetResponse
{
    /**
     * Elements of user's schedule. Every element has next keys:
     *
     * @var PageListGetResponseVisit[]|null
     */
    public ?array $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? array_map(static fn($item) => new PageListGetResponseVisit((array)$item), (array)$data['a_visit']) : null;
    }
}
