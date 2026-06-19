<?php
namespace WlSdk\Wl\Member\Progress\Log\Compare;

/**
 * Response from GET
 */
class CompareGetResponse
{
    /**
     * List of local dates of the progress log.
     *
     * @var string[]|null
     */
    public ?array $a_date = null;

    public function __construct(array $data)
    {
        $this->a_date = isset($data['a_date']) ? (array)$data['a_date'] : null;
    }
}
