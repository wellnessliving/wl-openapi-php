<?php

namespace WlSdk\Thoth\ExplorerSearch\ClassSession;

class ClassSessionSearchGetRequest
{
    /**
     * List of business keys to search by.
     *
     * Empty array to not filter by business keys.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /**
     * List of experience types to search by. Each value is one of {@link
     * \WlSdk\Thoth\ExplorerSearch\ClassSession\SearchWord\ClassSessionExperienceTypeEnum} case values.
     *
     * Empty array to not filter by experience type.
     *
     * @var int[]|null
     */
    public ?array $a_experience_type = null;

    /**
     * List of home tour activity types to search by. Each value is from {@link \WlSdk\RsHomeTourSid}.
     *
     * Empty array to not filter by home tour type.
     *
     * @var int[]|null
     */
    public ?array $a_home_tour = null;

    /**
     * List of location keys to search by.
     *
     * Empty array to not filter by location keys.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * List of location ratings to search by. Values are integers from 1 to 5, or `null`/`0` for unrated locations.
     *
     * Empty array to not filter by location rating.
     *
     * @var int[]|string[]|null
     */
    public $a_location_rating = null;

    /**
     * List of staff user keys to search by. Each value is a user key (uid) of a staff member.
     *
     * Empty array to not filter by staff.
     *
     * @var string[]|null
     */
    public ?array $a_staff_uid = null;

    /**
     * Start date of the session search date range in MySQL format (`Y-m-d`). Required.
     *
     * `null` if not set by request.
     *
     * @var string|null
     */
    public ?string $dl_begin = null;

    /**
     * End date of the session search date range in MySQL format (`Y-m-d`). Required.
     *
     * `null` if not set by request.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Latitude coordinate for search. Required.
     *
     * `null` if not set by request.
     *
     * @var float|null
     */
    public ?float $f_latitude = null;

    /**
     * Longitude coordinate for search. Required.
     *
     * `null` if not set by request.
     *
     * @var float|null
     */
    public ?float $f_longitude = null;

    /**
     * Search radius in kilometers. Required.
     *
     * `null` if not set by request.
     *
     * @var float|null
     */
    public ?float $f_radius = null;

    /**
     * Maximum price to search by (inclusive). Decimal string in dollars (e.g. `&quot;100.00&quot;`).
     *
     * `null` to not limit by maximum price.
     *
     * @var string|null
     */
    public ?string $m_price_max = null;

    /**
     * Minimum price to search by (inclusive). Decimal string in dollars (e.g. `&quot;0.00&quot;`).
     *
     * `null` to not limit by minimum price.
     *
     * @var string|null
     */
    public ?string $m_price_min = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_business' => $this->a_business,
            'a_experience_type' => $this->a_experience_type,
            'a_home_tour' => $this->a_home_tour,
            'a_location' => $this->a_location,
            'a_location_rating' => $this->a_location_rating,
            'a_staff_uid' => $this->a_staff_uid,
            'dl_begin' => $this->dl_begin,
            'dl_end' => $this->dl_end,
            'f_latitude' => $this->f_latitude,
            'f_longitude' => $this->f_longitude,
            'f_radius' => $this->f_radius,
            'm_price_max' => $this->m_price_max,
            'm_price_min' => $this->m_price_min,
            ],
            static fn ($v) => $v !== null
        );
    }
}
