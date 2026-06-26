<?php

namespace WlSdk\Wl\Contact\Type;

/**
 * Response from GET
 */
class ContactTypeListGetResponse
{
    /**
     * List of contact types.
     *
     * @var array|null
     */
    public ?array $a_contact_type = null;

    public function __construct(array $data)
    {
        $this->a_contact_type = isset($data['a_contact_type']) ? (array)$data['a_contact_type'] : null;
    }
}
