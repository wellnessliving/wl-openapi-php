<?php
namespace WlSdk\Wl\Integration\DragonFly;

/**
 * Response from GET
 */
class AccessGetResponse
{
    /**
     * Whether the specified user can access the location.
     * `true` if the specified member can access the location.
     * `false` if they can not.
     *
     * @var bool|null
     */
    public ?bool $can_access = null;

    public function __construct(array $data)
    {
        $this->can_access = isset($data['can_access']) ? (bool)$data['can_access'] : null;
    }
}
