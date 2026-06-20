<?php
namespace WlSdk\Wl\User\Info;

/**
 * Response from GET
 */
class UserIntegrationGetResponse
{
    /**
     * Information about the integrations the user is connected to. The information returned has the following
     * structure:
     * 
     * `null` if the user does not belong to any integration.
     *
     * @var UserIntegrationGetResponseIntegration|null
     */
    public ?UserIntegrationGetResponseIntegration $a_integration = null;

    public function __construct(array $data)
    {
        $this->a_integration = isset($data['a_integration']) ? new UserIntegrationGetResponseIntegration((array)$data['a_integration']) : null;
    }
}
