<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

/**
 * Response from POST
 */
class CsPaEnrollmentPostResponse
{
    /**
     * JSON Web Token to include into the request to the second frame.
     *
     * @var string|null
     */
    public ?string $s_jwt = null;

    /**
     * URL for frontend interaction.
     * This normally means that payer needs to make further steps for the authentication.
     *
     * `null` if no interaction required, and we should proceed with the withdrawal.
     * This normally means that payer is authenticated.
     *
     * If payer is not authenticated, or there is an error occurred during check of the enrollment,
     * this API returns an exception.
     *
     * @var string|null
     */
    public ?string $url_interact = null;

    public function __construct(array $data)
    {
        $this->s_jwt = isset($data['s_jwt']) ? (string)$data['s_jwt'] : null;
        $this->url_interact = isset($data['url_interact']) ? (string)$data['url_interact'] : null;
    }
}
