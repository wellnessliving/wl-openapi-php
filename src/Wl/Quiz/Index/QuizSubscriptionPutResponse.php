<?php

namespace WlSdk\Wl\Quiz\Index;

/**
 * Response from PUT
 */
class QuizSubscriptionPutResponse
{
    /**
     * Redirect URL after subscription is changed.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
