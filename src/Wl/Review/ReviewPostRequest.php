<?php
namespace WlSdk\Wl\Review;

class ReviewPostRequest
{
    /**
     * The rating given to the location (1 to 5 stars).
     * 
     * This will be `null` if not set yet.
     *
     * @var int|null
     */
    public ?int $i_rate = null;

    /**
     * The key of a location.
     * 
     * This will be `null` if not loaded yet.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Visit key.
     * Can be `null` if the review is not connected to a visit.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The text of the review.
     * 
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $s_text = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_rate' => $this->i_rate,
            'k_location' => $this->k_location,
            'k_visit' => $this->k_visit,
            's_text' => $this->s_text,
            ],
            static fn($v) => $v !== null
        );
    }
}
