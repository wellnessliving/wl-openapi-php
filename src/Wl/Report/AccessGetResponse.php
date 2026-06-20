<?php
namespace WlSdk\Wl\Report;

/**
 * Response from GET
 */
class AccessGetResponse
{
    /**
     * `true` - access is granted; `false` - access is denied.
     *
     * @var bool|null
     */
    public ?bool $has_access = null;

    public function __construct(array $data)
    {
        $this->has_access = isset($data['has_access']) ? (bool)$data['has_access'] : null;
    }
}
