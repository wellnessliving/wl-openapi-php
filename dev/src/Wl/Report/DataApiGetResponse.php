<?php
namespace WlSdk\Wl\Report;

/**
 * Response from GET
 */
class DataApiGetResponse
{
    /**
     * The report contents.
     * 
     * Contents of this array can vary based on the report that's loaded.
     *
     * @var array|null
     */
    public ?array $a_data = null;

    /**
     * The report total.
     * 
     * Contents of this array can vary based on the report that's loaded.
     *
     * @var array|null
     */
    public ?array $a_total = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? (array)$data['a_data'] : null;
        $this->a_total = isset($data['a_total']) ? (array)$data['a_total'] : null;
    }
}
