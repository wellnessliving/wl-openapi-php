<?php

namespace WlSdk\Wl\Appointment\View;

/**
 * Response from GET
 */
class ViewStoreGetResponse
{
    /**
     * List of amounts that must be paid. Each element contains keys:
     *
     * @var ViewStoreGetResponseItem[]|null
     */
    public ?array $a_item = null;

    public function __construct(array $data)
    {
        $this->a_item = isset($data['a_item']) ? array_map(static fn ($item) => new ViewStoreGetResponseItem((array)$item), (array)$data['a_item']) : null;
    }
}
