<?php

namespace WlSdk;

/**
 * A list of client booking flow types.
 *
 * Last ID: 6.
 *
 * Values:
 * - 6 (`EDUCATION`): Musician schools.
 * - 3 (`HEALTH`): Traditional medicine
 * - 2 (`RECREATION`): Spa saloons.
 * - 1 (`SPORT`): Yoga and Fitness studios and gyms.
 */
class RsBusinessCategorySid
{
    /** Musician schools. */
    public const EDUCATION = 6;

    /** Traditional medicine */
    public const HEALTH = 3;

    /** Spa saloons. */
    public const RECREATION = 2;

    /** Yoga and Fitness studios and gyms. */
    public const SPORT = 1;
}
