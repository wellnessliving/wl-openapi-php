<?php
namespace WlSdk\Wl\Profile\Attach;

/**
 * Response from GET
 */
class AttachListGetResponse
{
    /**
     * List of client attachments.
     * Each element:
     *
     * @var AttachListGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn($item) => new AttachListGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
