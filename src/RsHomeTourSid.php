<?php
namespace WlSdk;

/**
 * List of different types for landing pages based on business types.
 * 
 * Last ID: 33
 * 
 * Values:
 * - 26 (`BARBERSHOP`): Barbershops.
 * - 24 (`BOOTCAMP`): Boot camps.
 * - 25 (`BOXING`): Boxing studios.
 * - 21 (`BUSINESS_MANAGEMENT`): Special industry free landing page with only contact us form.
 * - 10 (`CLUB`): Health clubs.
 * - 9 (`CROSSFIT`): Affiliate Gym.
 * - 11 (`DANCE`): Dance studios.
 * - 14 (`DENTAL`): Dental studios.
 * - 6 (`FITNESS`): Fitness gyms.
 * - 29 (`FUNCTIONAL_FITNESS`): Functional fitness also known as functional training or functional movement.
 * - 22 (`GYM`): Fitness gyms.
 * - 23 (`HEALTH_CLUB`): Health clubs.
 * - 30 (`INTEGRATIVE_HEALTH_CENTER`): Health and beauty salons at one place.
 * - 8 (`MARTIAL_ART`): Martial arts.
 * - 4 (`MASSAGE`): Massage salons.
 * - 28 (`MEDICAL_SPA`): Massage salons.
 * - 15 (`MEDICINE_ALTERNATIVE`): Alternative medical offices.
 * - 13 (`MEDICINE_TRADITIONAL`): Hospitals and private doctors.
 * - 19 (`MUSIC`): Music schools.
 * - 5 (`PERSONAL_TRAINING`): Personal trainings.
 * - 7 (`PILATES`): Pilates.
 * - 32 (`PLAY_CAFE`): Play cafes.
 * - 18 (`POLE_DANCING`): Pole dancing studios.
 * - 3 (`SALON`): Salons.
 * - 2 (`SPA`): Spa salons.
 * - 17 (`SPINNING`): Spinning.
 * - 33 (`SWIM_SCHOOL`): Swim schools
 * - 31 (`TATTOO`): Tattoo salons.
 * - 12 (`TOUR`): Tours and events.
 * - 20 (`WELLNESS_CENTER`): Wellness Centers
 * - 1 (`YOGA`): Yoga.
 * - 27 (`ZUMBA`): Zumba.
 */
enum RsHomeTourSid: int
{
    case BARBERSHOP = 26;
    case BOOTCAMP = 24;
    case BOXING = 25;
    case BUSINESS_MANAGEMENT = 21;
    case CLUB = 10;
    case CROSSFIT = 9;
    case DANCE = 11;
    case DENTAL = 14;
    case FITNESS = 6;
    case FUNCTIONAL_FITNESS = 29;
    case GYM = 22;
    case HEALTH_CLUB = 23;
    case INTEGRATIVE_HEALTH_CENTER = 30;
    case MARTIAL_ART = 8;
    case MASSAGE = 4;
    case MEDICAL_SPA = 28;
    case MEDICINE_ALTERNATIVE = 15;
    case MEDICINE_TRADITIONAL = 13;
    case MUSIC = 19;
    case PERSONAL_TRAINING = 5;
    case PILATES = 7;
    case PLAY_CAFE = 32;
    case POLE_DANCING = 18;
    case SALON = 3;
    case SPA = 2;
    case SPINNING = 17;
    case SWIM_SCHOOL = 33;
    case TATTOO = 31;
    case TOUR = 12;
    case WELLNESS_CENTER = 20;
    case YOGA = 1;
    case ZUMBA = 27;
}
