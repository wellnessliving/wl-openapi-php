<?php
namespace WlSdk\Wl\Reception\Application;

class ReceptionScheduleGetResponseClassResourcesShared
{
    /**
     * The resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * The resource title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
