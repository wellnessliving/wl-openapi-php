<?php

namespace WlSdk\Thoth\ProgressLog\ProfilePage;

/**
 * Response from GET
 */
class ProgressLogProfilePageViewGetResponse
{
    /**
     * Rendered progress log profile page.
     *
     * @var string|null
     */
    public ?string $html_view = null;

    public function __construct(array $data)
    {
        $this->html_view = isset($data['html_view']) ? (string)$data['html_view'] : null;
    }
}
