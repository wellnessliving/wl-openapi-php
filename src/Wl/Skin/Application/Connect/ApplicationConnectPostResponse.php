<?php

namespace WlSdk\Wl\Skin\Application\Connect;

/**
 * Response from POST
 */
class ApplicationConnectPostResponse
{
    /**
     * Key of the created or updated application.
     * Set in the response after a successful `post()` call.
     *
     * @var string|null
     */
    public ?string $k_spa_application = null;

    public function __construct(array $data)
    {
        $this->k_spa_application = isset($data['k_spa_application']) ? (string)$data['k_spa_application'] : null;
    }
}
