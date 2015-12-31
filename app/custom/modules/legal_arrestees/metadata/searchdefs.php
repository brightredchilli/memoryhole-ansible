<?php
$module_name = 'legal_arrestees';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'preferred_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PREFERRED_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'preferred_name',
      ),
      'release_type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_RELEASE_TYPE',
        'width' => '10%',
        'name' => 'release_type_c',
      ),
      'case_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CASE_STATUS',
        'width' => '10%',
        'name' => 'case_status_c',
      ),
      'disposition_c' => 
      array (
        'label' => 'LBL_DISPOSITION',
        'width' => '10%',
        'name' => 'disposition_c',
        'default_value' => '',
        'default' => true,
      ),
      'arrest_date' => 
      array (
        'label' => 'LBL_ARREST_DATE',
        'width' => '10%',
        'name' => 'arrest_date',
        'default' => true,
      ),
      'first_appearance_date_c' => 
      array (
        'label' => 'LBL_FIRST_APPEARANCE_DATE',
        'width' => '10%',
        'name' => 'first_appearance_date_c',
        'default_value' => '',
        'default' => true,
      ),
      'jurisdiction_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_JURISDICTION',
        'width' => '10%',
        'name' => 'jurisdiction_c',
      ),
    ),
    'advanced_search' => 
    array (
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'name' => 'email',
        'default' => true,
      ),
      'phone_mobile' => 
      array (
        'label' => 'LBL_MOBILE_PHONE',
        'width' => '10%',
        'name' => 'phone_mobile',
        'default' => true,
      ),
      'phone_work' => 
      array (
        'label' => 'LBL_OFFICE_PHONE',
        'width' => '10%',
        'name' => 'phone_work',
        'default' => true,
      ),
      'preferred_name' => 
      array (
        'label' => 'LBL_PREFERRED_NAME',
        'width' => '10%',
        'name' => 'preferred_name',
        'default' => true,
      ),
      'primary_address_street' => 
      array (
        'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        'width' => '10%',
        'name' => 'primary_address_street',
        'default' => true,
      ),
      'primary_address_city' => 
      array (
        'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        'width' => '10%',
        'name' => 'primary_address_city',
        'default' => true,
      ),
      'primary_address_state' => 
      array (
        'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        'width' => '10%',
        'name' => 'primary_address_state',
        'default' => true,
      ),
      'primary_address_postalcode' => 
      array (
        'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
        'width' => '10%',
        'name' => 'primary_address_postalcode',
        'default' => true,
      ),
      'date_of_birth' => 
      array (
        'label' => 'LBL_DATE_OF_BIRTH',
        'width' => '10%',
        'name' => 'date_of_birth',
        'default' => true,
      ),
      'gender_id_c' => 
      array (
        'label' => 'LBL_GENDER_ID',
        'width' => '10%',
        'name' => 'gender_id_c',
        'default_value' => '',
        'default' => true,
      ),
      'support_person_c' => 
      array (
        'label' => 'LBL_SUPPORT_PERSON',
        'width' => '10%',
        'name' => 'support_person_c',
        'default_value' => '',
        'default' => true,
      ),
      'arrest_location' => 
      array (
        'label' => 'LBL_ARREST_LOCATION',
        'width' => '10%',
        'name' => 'arrest_location',
        'default' => true,
      ),
      'arrest_date' => 
      array (
        'label' => 'LBL_ARREST_DATE',
        'width' => '10%',
        'name' => 'arrest_date',
        'default' => true,
      ),
      'arrest_time_c' => 
      array (
        'label' => 'LBL_ARREST_TIME',
        'width' => '10%',
        'name' => 'arrest_time_c',
        'default_value' => '',
        'default' => true,
      ),
      'arresting_officer' => 
      array (
        'label' => 'LBL_ARRESTING_OFFICER',
        'width' => '10%',
        'name' => 'arresting_officer',
        'default' => true,
      ),
      'badge_number' => 
      array (
        'label' => 'LBL_BADGE_NUMBER',
        'width' => '10%',
        'name' => 'badge_number',
        'default' => true,
      ),
      'release_date' => 
      array (
        'label' => 'LBL_RELEASE_DATE',
        'width' => '10%',
        'name' => 'release_date',
        'default' => true,
      ),
      'release_time' => 
      array (
        'label' => 'LBL_RELEASE_TIME',
        'width' => '10%',
        'name' => 'release_time',
        'default' => true,
      ),
      'release_type_c' => 
      array (
        'label' => 'LBL_RELEASE_TYPE',
        'width' => '10%',
        'name' => 'release_type_c',
        'default_value' => '',
        'default' => true,
      ),
      'jail_facility_c' => 
      array (
        'label' => 'LBL_JAIL_FACILITY',
        'width' => '10%',
        'name' => 'jail_facility_c',
        'default_value' => '',
        'default' => true,
      ),
      'booking_number_c' => 
      array (
        'label' => 'LBL_BOOKING_NUMBER',
        'width' => '10%',
        'name' => 'booking_number_c',
        'default_value' => '',
        'default' => true,
      ),
      'jail_location_c' => 
      array (
        'label' => 'LBL_JAIL_LOCATION',
        'width' => '10%',
        'name' => 'jail_location_c',
        'default_value' => '',
        'default' => true,
      ),
      'bail_c' => 
      array (
        'label' => 'LBL_BAIL',
        'width' => '10%',
        'name' => 'bail_c',
        'default_value' => '',
        'default' => true,
      ),
      'case_number_c' => 
      array (
        'label' => 'LBL_CASE_NUMBER',
        'width' => '10%',
        'name' => 'case_number_c',
        'default_value' => '',
        'default' => true,
      ),
      'citation_number' => 
      array (
        'label' => 'LBL_CITATION_NUMBER',
        'width' => '10%',
        'name' => 'citation_number',
        'default' => true,
      ),
      'docket_c' => 
      array (
        'label' => 'LBL_DOCKET',
        'width' => '10%',
        'name' => 'docket_c',
        'default_value' => '',
        'default' => true,
      ),
      'lawyer' => 
      array (
        'label' => 'LBL_LAWYER',
        'width' => '10%',
        'name' => 'lawyer',
        'default' => true,
      ),
      'first_appearance_date_c' => 
      array (
        'label' => 'LBL_FIRST_APPEARANCE_DATE',
        'width' => '10%',
        'name' => 'first_appearance_date_c',
        'default_value' => '',
        'default' => true,
      ),
      'next_hearing_time_c' => 
      array (
        'label' => 'LBL_NEXT_HEARING_TIME',
        'width' => '10%',
        'name' => 'next_hearing_time_c',
        'default_value' => '',
        'default' => true,
      ),
      'misdemeanors_c' => 
      array (
        'label' => 'LBL_MISDEMEANORS',
        'width' => '10%',
        'name' => 'misdemeanors_c',
        'default_value' => '',
        'default' => true,
      ),
      'infraction_c' => 
      array (
        'label' => 'LBL_INFRACTION',
        'width' => '10%',
        'name' => 'infraction_c',
        'default_value' => '',
        'default' => true,
      ),
      'dropped_c' => 
      array (
        'label' => 'LBL_DROPPED',
        'width' => '10%',
        'name' => 'dropped_c',
        'default_value' => '',
        'default' => true,
      ),
      'legal_strategy_c' => 
      array (
        'label' => 'LBL_LEGAL_STRATEGY',
        'width' => '10%',
        'name' => 'legal_strategy_c',
        'default_value' => '',
        'default' => true,
      ),
      'disposition_c' => 
      array (
        'label' => 'LBL_DISPOSITION',
        'width' => '10%',
        'name' => 'disposition_c',
        'default_value' => '',
        'default' => true,
      ),
      'medical_needs_c' => 
      array (
        'label' => 'LBL_MEDICAL_NEEDS',
        'width' => '10%',
        'name' => 'medical_needs_c',
        'default_value' => '',
        'default' => true,
      ),
      'jurisdiction_c' => 
      array (
        'label' => 'LBL_JURISDICTION',
        'width' => '10%',
        'name' => 'jurisdiction_c',
        'default_value' => '',
        'default' => true,
      ),
      'arrest_city_c' => 
      array (
        'label' => 'LBL_ARREST_CITY',
        'width' => '10%',
        'name' => 'arrest_city_c',
        'default_value' => '',
        'default' => true,
      ),
      'immigration_issues' => 
      array (
        'label' => 'LBL_IMMIGRATION_ISSUES',
        'width' => '10%',
        'name' => 'immigration_issues',
        'default' => true,
      ),
      'contacts_c' => 
      array (
        'label' => 'LBL_CONTACTS',
        'width' => '10%',
        'name' => 'contacts_c',
        'default_value' => '',
        'default' => true,
      ),
      'minor' => 
      array (
        'label' => 'LBL_MINOR',
        'width' => '10%',
        'name' => 'minor',
        'default' => true,
      ),
      'confirmed_info_c' => 
      array (
        'label' => 'LBL_CONFIRMED_INFO',
        'width' => '10%',
        'name' => 'confirmed_info_c',
        'default_value' => '',
        'default' => true,
      ),
      'felony_charges' => 
      array (
        'label' => 'LBL_FELONY_CHARGES',
        'width' => '10%',
        'name' => 'felony_charges',
        'default' => true,
      ),
      'info_notes_c' => 
      array (
        'label' => 'LBL_INFO_NOTES',
        'width' => '10%',
        'name' => 'info_notes_c',
        'default_value' => '',
        'default' => true,
      ),
      'email_bounce_c' => 
      array (
        'label' => 'LBL_EMAIL_BOUNCE',
        'width' => '10%',
        'name' => 'email_bounce_c',
        'default_value' => '',
        'default' => true,
      ),
      'bad_phone_c' => 
      array (
        'label' => 'LBL_BAD_PHONE',
        'width' => '10%',
        'name' => 'bad_phone_c',
        'default_value' => '',
        'default' => true,
      ),
      'description' => 
      array (
        'label' => 'LBL_DESCRIPTION',
        'width' => '10%',
        'name' => 'description',
        'default' => true,
      ),
      'listserv_c' => 
      array (
        'label' => 'LBL_LISTSERV',
        'width' => '10%',
        'name' => 'listserv_c',
        'default_value' => '',
        'default' => true,
      ),
      'stay_away_c' => 
      array (
        'label' => 'LBL_STAY_AWAY',
        'width' => '10%',
        'name' => 'stay_away_c',
        'default_value' => '',
        'default' => true,
      ),
      'cant_attend_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CANT_ATTEND',
        'width' => '10%',
        'name' => 'cant_attend_c',
      ),
      'affinity_group_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_AFFINITY_GROUP',
        'width' => '10%',
        'name' => 'affinity_group_c',
      ),
      'case_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CASE_STATUS',
        'width' => '10%',
        'name' => 'case_status_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
