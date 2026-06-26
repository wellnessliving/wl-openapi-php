<?php

namespace WlSdk\Wl\Zoom;

/**
 * Response from GET
 */
class ZoomUserListGetResponse
{
    /**
     * List of all licensed for given business owner.
     *
     * @var array|null
     */
    public ?array $a_license_list = null;

    /**
     * Percent of license in use.
     *
     * @var string|null
     */
    public ?string $f_license_use = null;

    public function __construct(array $data)
    {
        $this->a_license_list = isset($data['a_license_list']) ? (array)$data['a_license_list'] : null;
        $this->f_license_use = isset($data['f_license_use']) ? (string)$data['f_license_use'] : null;
    }
}
