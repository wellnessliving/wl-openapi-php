<?php
namespace WlSdk\Wl\Member\Group\Edit;

/**
 * Response from PUT
 */
class EditApiPutResponse
{
    /**
     * Additional warning message if there were some minor issues with request.
     *
     * @var string|null
     */
    public ?string $text_warning = null;

    public function __construct(array $data)
    {
        $this->text_warning = isset($data['text_warning']) ? (string)$data['text_warning'] : null;
    }
}
