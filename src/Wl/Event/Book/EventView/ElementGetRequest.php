<?php

namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetRequest
{
    /**
     * The last available date for booking.
     * If this is set and `dl_book_available_start` is a set list of
     *   sessions available for booking, `a_book_available`
     *   should match given date range.
     *
     * @var string|null
     */
    public ?string $dl_book_available_end = null;

    /**
     * The first available date for booking.
     * If this is set and `dl_book_available_end` is a set list of
     *   sessions available for booking `a_book_available`
     *   should match given date range.
     *
     * @var string|null
     */
    public ?string $dl_book_available_start = null;

    /**
     * Datetime of the session.
     * Is not `null` only if we need to get information for an event with a specific class period and datetime.
     * If this is `null`, then the `k_class_period` should be `null` too.
     *
     * @var string|null
     */
    public ?string $dtu_session = null;

    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified, the returned image will have the default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified, the returned image will have the default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * Staff image height in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified, the returned image will have the default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_staff_image_height = null;

    /**
     * Staff image width in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified, the returned image will have the default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_staff_image_width = null;

    /**
     * `true` if schedule should be grouped by location time and staff,
     * `false` if all schedule elements should be independent.
     *
     * @var bool|null
     */
    public ?bool $is_schedule_group = null;

    /**
     * Key of a business to which the requested event(s) belong.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of a class period to show information for.
     *
     * Is not `null` only if we need to get information for an event with a specific class period and datetime.
     * If this is `null`, then the `dtu_session` should be `null` too.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The event key.
     * You can specify `s_event` instead to get information for a large number of events.
     *
     * @var string|null
     */
    public ?string $k_event = null;

    /**
     * A list of event keys serialized with JSON.
     * Specify instead of `k_event` to get information for a large number of events.
     *
     * @var string|null
     */
    public ?string $s_event = null;

    /**
     * `true` to show schedule, which is not published yet.
     * `false` to show only published schedule.
     *
     * @var bool|null
     */
    public ?bool $show_unpublished = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_book_available_end' => $this->dl_book_available_end,
            'dl_book_available_start' => $this->dl_book_available_start,
            'dtu_session' => $this->dtu_session,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'i_staff_image_height' => $this->i_staff_image_height,
            'i_staff_image_width' => $this->i_staff_image_width,
            'is_schedule_group' => $this->is_schedule_group,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'k_event' => $this->k_event,
            's_event' => $this->s_event,
            'show_unpublished' => $this->show_unpublished,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
