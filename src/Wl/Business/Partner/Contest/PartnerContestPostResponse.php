<?php

namespace WlSdk\Wl\Business\Partner\Contest;

/**
 * Response from POST
 */
class PartnerContestPostResponse
{
    /**
     * The message to show in case of an error.
     *
     * @var string|null
     */
    public ?string $s_message = null;

    /**
     * Status of the operation.
     *
     * @var string|null
     */
    public ?string $s_status = null;

    public function __construct(array $data)
    {
        $this->s_message = isset($data['s_message']) ? (string)$data['s_message'] : null;
        $this->s_status = isset($data['s_status']) ? (string)$data['s_status'] : null;
    }
}
