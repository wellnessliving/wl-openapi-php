<?php

namespace WlSdk\Wl\Appointment\Book\Block;

class AddonListGetResponseAddon
{
    /**
     * Extra time that the add-on adds to the appointment, in minutes. `0` if the add-on takes no time of its own.
     *
     * @var int|null
     */
    public ?int $i_extra_time = null;

    /**
     * Key of the add-on service.
     *
     * @var string|null
     */
    public ?string $k_service_addon = null;

    /**
     * Extra cost that the add-on adds to the price of the appointment.
     *
     * @var string|null
     */
    public ?string $m_extra_cost = null;

    /**
     * The regular price of the add-on, shown struck through next to Extra cost. `null` if nothing is struck
     * through.
     *
     * @var string|null
     */
    public ?string $m_price_regular = null;

    /**
     * Short line that tells why to add the add-on. `null` if the add-on has none.
     *
     * @var string|null
     */
    public ?string $text_tagline = null;

    /**
     * Title of the add-on.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_extra_time = isset($data['i_extra_time']) ? (int)$data['i_extra_time'] : null;
        $this->k_service_addon = isset($data['k_service_addon']) ? (string)$data['k_service_addon'] : null;
        $this->m_extra_cost = isset($data['m_extra_cost']) ? (string)$data['m_extra_cost'] : null;
        $this->m_price_regular = isset($data['m_price_regular']) ? (string)$data['m_price_regular'] : null;
        $this->text_tagline = isset($data['text_tagline']) ? (string)$data['text_tagline'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
