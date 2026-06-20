<?php

namespace WlSdk\Wl\Review\ReviewList;

class ReviewListGetResponseReview
{
    /**
     * `true` if can reply to review, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_reply = null;

    /**
     * Date when staff reply to review. Can be empty string if no one replied.
     *
     * @var string|null
     */
    public ?string $dl_reply = null;

    /**
     * Date when review added.
     *
     * @var string|null
     */
    public ?string $dt_add = null;

    /**
     * Rate of review.
     *
     * @var float|null
     */
    public ?float $f_rate = null;

    /**
     * `true` if review is featured, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_featured = null;

    /**
     * `true` if review is verify, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_verify = null;

    /**
     * The location key for where the review was left/assigned.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Review key.
     *
     * @var string|null
     */
    public ?string $k_review = null;

    /**
     * First name of user who wrote review.
     *
     * @var string|null
     */
    public ?string $s_firstname = null;

    /**
     * Last name of user who wrote review.
     *
     * @var string|null
     */
    public ?string $s_lastname = null;

    /**
     * Reply for review.
     *
     * @var string|null
     */
    public ?string $s_reply = null;

    /**
     * Review text.
     *
     * @var string|null
     */
    public ?string $s_text = null;

    /**
     * City from the profile of the user, who left review.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * First name of staff who replied of review. Can be empty string if no one replied.
     *
     * @var string|null
     */
    public ?string $text_reply_first = null;

    /**
     * Last name of staff who replied of review. Can be empty string if no one replied.
     *
     * @var string|null
     */
    public ?string $text_reply_last = null;

    /**
     * Staff role who replied of review. Can be empty string if no one replied.
     *
     * @var string|null
     */
    public ?string $text_role = null;

    /**
     * User key who wrote review.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Link to the image of the user who wrote review.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    /**
     * Link to the image of the user who replied of review. Can be empty string if no one replied.
     *
     * @var string|null
     */
    public ?string $url_reply_image = null;

    public function __construct(array $data)
    {
        $this->can_reply = isset($data['can_reply']) ? (bool)$data['can_reply'] : null;
        $this->dl_reply = isset($data['dl_reply']) ? (string)$data['dl_reply'] : null;
        $this->dt_add = isset($data['dt_add']) ? (string)$data['dt_add'] : null;
        $this->f_rate = isset($data['f_rate']) ? (float)$data['f_rate'] : null;
        $this->is_featured = isset($data['is_featured']) ? (bool)$data['is_featured'] : null;
        $this->is_verify = isset($data['is_verify']) ? (bool)$data['is_verify'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_review = isset($data['k_review']) ? (string)$data['k_review'] : null;
        $this->s_firstname = isset($data['s_firstname']) ? (string)$data['s_firstname'] : null;
        $this->s_lastname = isset($data['s_lastname']) ? (string)$data['s_lastname'] : null;
        $this->s_reply = isset($data['s_reply']) ? (string)$data['s_reply'] : null;
        $this->s_text = isset($data['s_text']) ? (string)$data['s_text'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_reply_first = isset($data['text_reply_first']) ? (string)$data['text_reply_first'] : null;
        $this->text_reply_last = isset($data['text_reply_last']) ? (string)$data['text_reply_last'] : null;
        $this->text_role = isset($data['text_role']) ? (string)$data['text_role'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
        $this->url_reply_image = isset($data['url_reply_image']) ? (string)$data['url_reply_image'] : null;
    }
}
