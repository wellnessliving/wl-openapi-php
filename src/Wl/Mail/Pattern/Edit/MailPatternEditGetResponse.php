<?php

namespace WlSdk\Wl\Mail\Pattern\Edit;

/**
 * Response from GET
 */
class MailPatternEditGetResponse
{
    /**
     * The number of affected clients.
     *
     * @var int|null
     */
    public ?int $i_affected_clients = null;

    /**
     * Whether some clients will be affected after the change of mail pattern.
     *
     * @var bool|null
     */
    public ?bool $is_affected_client = null;

    /**
     * URL for client report.
     *
     * @var string|null
     */
    public ?string $url_report = null;

    public function __construct(array $data)
    {
        $this->i_affected_clients = isset($data['i_affected_clients']) ? (int)$data['i_affected_clients'] : null;
        $this->is_affected_client = isset($data['is_affected_client']) ? (bool)$data['is_affected_client'] : null;
        $this->url_report = isset($data['url_report']) ? (string)$data['url_report'] : null;
    }
}
