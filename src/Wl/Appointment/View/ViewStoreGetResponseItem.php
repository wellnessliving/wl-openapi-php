<?php

namespace WlSdk\Wl\Appointment\View;

class ViewStoreGetResponseItem
{
    /**
     * Item price.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Item title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
