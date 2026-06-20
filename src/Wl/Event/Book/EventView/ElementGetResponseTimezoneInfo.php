<?php

namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseTimezoneInfo
{
    /**
     * UTC offset in hours for this timezone.
     *
     * @var int|null
     */
    public ?int $i_shift = null;

    /**
     * Timezone identifier string (e.g. `America/New_York`).
     *
     * @var string|null
     */
    public ?string $s_file = null;

    /**
     * Timezone abbreviation (e.g. `EST`). `null` if not set.
     *
     * @var string|null
     */
    public ?string $text_abbr = null;

    public function __construct(array $data)
    {
        $this->i_shift = isset($data['i_shift']) ? (int)$data['i_shift'] : null;
        $this->s_file = isset($data['s_file']) ? (string)$data['s_file'] : null;
        $this->text_abbr = isset($data['text_abbr']) ? (string)$data['text_abbr'] : null;
    }
}
