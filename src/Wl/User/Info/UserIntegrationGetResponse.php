<?php
namespace WlSdk\Wl\User\Info;

/**
 * Response from GET
 */
class UserIntegrationGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_integration = null;

    public function __construct(array $data)
    {
        $this->a_integration = isset($data['a_integration']) ? (array)$data['a_integration'] : null;
    }
}
