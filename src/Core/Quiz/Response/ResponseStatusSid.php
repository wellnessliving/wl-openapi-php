<?php
namespace WlSdk\Core\Quiz\Response;

/**
 * List of response statuses.
 * 
 * Last used ID: 6
 * 
 * Values:
 * - 1 (`ACTIVE`): Response is active.
 * - 5 (`ACTIVE_AMEND`): Response is active and has amendments.
 * - 2 (`DRAFT`): Response in draft mode.
 * - 3 (`INACTIVE`): Response in inactive.
 * 
 *   It's temporary status which used when response is saved during registration/booking/purchase process,
 *   after this process is ended response status changed to
 * [ResponseStatusSid::ACTIVE](#/components/schemas/Core.Quiz.Response.ResponseStatusSid).
 * - 4 (`INACTIVE_DRAFT`): Response in inactive and in draft mode.
 * 
 *   It's temporary status which used when response is saved in draft mode during registration/booking/purchase
 * process,
 *   after this process is ended response status changed to
 * [ResponseStatusSid::DRAFT](#/components/schemas/Core.Quiz.Response.ResponseStatusSid).
 */
class ResponseStatusSid
{
    /** Response is active. */
    const ACTIVE = 1;
    /** Response is active and has amendments. */
    const ACTIVE_AMEND = 5;
    /** Response in draft mode. */
    const DRAFT = 2;
    /** Response in inactive. */
    const INACTIVE = 3;
    /** Response in inactive and in draft mode. */
    const INACTIVE_DRAFT = 4;
}
