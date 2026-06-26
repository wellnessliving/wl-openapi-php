<?php

namespace WlSdk\Wl\Toast;

/**
 * Response from GET
 */
class ToastGetResponse
{
    /**
     * Array of result toasts.
     *
     * @var array|null
     */
    public ?array $a_toast = null;

    public function __construct(array $data)
    {
        $this->a_toast = isset($data['a_toast']) ? (array)$data['a_toast'] : null;
    }
}
