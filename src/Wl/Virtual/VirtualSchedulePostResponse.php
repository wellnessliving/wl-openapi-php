<?php

namespace WlSdk\Wl\Virtual;

/**
 * Response from POST
 */
class VirtualSchedulePostResponse
{
    /**
     * Number of seconds after which need to repeat request.
     *
     * `null` if request should not be repeated.
     *
     * @var int|null
     */
    public ?int $i_delay = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Link to created meeting.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->i_delay = isset($data['i_delay']) ? (int)$data['i_delay'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
