<?php

namespace WlSdk\Wl\Integration\Autymate;

/**
 * Response from GET
 */
class AutymateEnrollGetResponse
{
    /**
     * Autymate enrollment key, primary key in the AutymateEnrollSql table.
     *
     * @var string|null
     */
    public ?string $k_autymate_enroll = null;

    public function __construct(array $data)
    {
        $this->k_autymate_enroll = isset($data['k_autymate_enroll']) ? (string)$data['k_autymate_enroll'] : null;
    }
}
