<?php
namespace WlSdk\Wl\Gym\Visit;

/**
 * Response from POST
 */
class VisitAddPostResponse
{
    /**
     * Url to the business catalog with items that can be used to pay for the visit.
     *
     * @var string|null
     */
    public ?string $url_catalog = null;

    public function __construct(array $data)
    {
        $this->url_catalog = isset($data['url_catalog']) ? (string)$data['url_catalog'] : null;
    }
}
