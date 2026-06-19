<?php
namespace WlSdk\Wl\Classes\Period\Modify;

/**
 * Response from GET
 */
class ModifyApiGetResponse
{
    /**
     * Step information, depending on the steps.
     *
     * @var array|null
     */
    public ?array $a_get = null;

    public function __construct(array $data)
    {
        $this->a_get = isset($data['a_get']) ? (array)$data['a_get'] : null;
    }
}
