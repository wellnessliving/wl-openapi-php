<?php
namespace WlSdk\Wl\Profile\Alert;

/**
 * Response from GET
 */
class AlertApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_alert = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_warning = null;

    public function __construct(array $data)
    {
        $this->a_alert = isset($data['a_alert']) ? (array)$data['a_alert'] : null;
        $this->a_warning = isset($data['a_warning']) ? (array)$data['a_warning'] : null;
    }
}
