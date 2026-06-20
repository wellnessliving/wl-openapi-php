<?php

namespace WlSdk\Wl\Review\ReviewList;

class ReviewElementGetResponseReview
{
    /**
     * Date when review was added by user.
     *
     * @var string|null
     */
    public ?string $dt_add = null;

    /**
     * Review rate.
     *
     * @var float|null
     */
    public ?float $f_rate = null;

    /**
     * Status of the Review. One of {@link \WlSdk\RsReviewStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsReviewStatusSid
     */
    public ?int $id_review_status = null;

    /**
     * If `true`, the review is featured. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_featured = null;

    /**
     * `true` if review is verified, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_verify = null;

    /**
     * Client's first name who added review.
     *
     * @var string|null
     */
    public ?string $text_firstname = null;

    /**
     * Client's last name who added review.
     *
     * @var string|null
     */
    public ?string $text_lastname = null;

    /**
     * Staff reply. Can be empty.
     *
     * @var string|null
     */
    public ?string $text_reply = null;

    /**
     * Review text.
     *
     * @var string|null
     */
    public ?string $text_review = null;

    /**
     * Business name
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    /**
     * Word "response".
     *
     * @var string|null
     */
    public ?string $text_response = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * User logo.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->dt_add = isset($data['dt_add']) ? (string)$data['dt_add'] : null;
        $this->f_rate = isset($data['f_rate']) ? (float)$data['f_rate'] : null;
        $this->id_review_status = isset($data['id_review_status']) ? (int)$data['id_review_status'] : null;
        $this->is_featured = isset($data['is_featured']) ? (bool)$data['is_featured'] : null;
        $this->is_verify = isset($data['is_verify']) ? (bool)$data['is_verify'] : null;
        $this->text_firstname = isset($data['text_firstname']) ? (string)$data['text_firstname'] : null;
        $this->text_lastname = isset($data['text_lastname']) ? (string)$data['text_lastname'] : null;
        $this->text_reply = isset($data['text_reply']) ? (string)$data['text_reply'] : null;
        $this->text_review = isset($data['text_review']) ? (string)$data['text_review'] : null;
        $this->text_business_name = isset($data['text_business_name']) ? (string)$data['text_business_name'] : null;
        $this->text_response = isset($data['text_response']) ? (string)$data['text_response'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
