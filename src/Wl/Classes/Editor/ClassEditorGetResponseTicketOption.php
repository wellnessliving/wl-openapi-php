<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseTicketOption
{
    /**
     * Price of one ticket of this type.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * `true` if at least one ticket of this type has been sold, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_sold = null;

    /**
     * Key of the type.
     *
     * @var string|null
     */
    public ?string $k_ticket_option = null;

    /**
     * Title of the type, for example `General admission`.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->is_sold = isset($data['is_sold']) ? (bool)$data['is_sold'] : null;
        $this->k_ticket_option = isset($data['k_ticket_option']) ? (string)$data['k_ticket_option'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
