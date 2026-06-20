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
enum RsBusinessCategorySid: int
{
    case EDUCATION = 6;
    case HEALTH = 3;
    case RECREATION = 2;
    case SPORT = 1;
}
