<?php

namespace WlSdk\Wl\Announcement;

class AnnouncementElementPostRequest
{
    /**
     * Announcement key.
     *
     * @var string|null
     */
    public ?string $k_announcement = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of locations keys.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * The date and time when the announcement was published.
     *
     * This will be `null` if the published date is not set yet.
     *
     * @var string|null
     */
    public ?string $dtl_publish = null;

    /**
     * The date and time when the announcement was unpublished.
     *
     * This will be `null` if the unpublished date is not set yet.
     *
     * @var string|null
     */
    public ?string $dtl_unpublish = null;

    /**
     * The action that must be performed to the announcement image.
     *
     * @var string|null
     */
    public ?string $s_command = null;

    /**
     * Title of announcement.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Description of announcement.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_announcement' => $this->k_announcement,
            'k_business' => $this->k_business,
            'a_location' => $this->a_location,
            'dtl_publish' => $this->dtl_publish,
            'dtl_unpublish' => $this->dtl_unpublish,
            's_command' => $this->s_command,
            'text_title' => $this->text_title,
            'xml_description' => $this->xml_description,
            ],
            static fn ($v) => $v !== null
        );
    }
}
