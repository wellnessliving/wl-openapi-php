<?php

namespace WlSdk\Wl\Reception\Roster\Search;

class SearchGetRequest
{
    /**
     * Number of the request. Is required to ignore old requests, when new request was already done.
     *
     * @var int|null
     */
    public ?int $i_request = null;

    /**
     * ID of the location. Used to determinate business.
     *
     * @var int|null
     */
    public ?int $k_location = null;

    /**
     * String that will be used as search phrase.
     *
     * @var string|null
     */
    public ?string $s_request = null;

    /**
     * Secret string to get access.
     * As this API can be used without backend we need to protect using thi API be secret code.
     * See Controller::secret()
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_request' => $this->i_request,
            'k_location' => $this->k_location,
            's_request' => $this->s_request,
            's_secret' => $this->s_secret,
            ],
            static fn ($v) => $v !== null
        );
    }
}
