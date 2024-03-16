<?php
include __DIR__ . '/lib/vendor/autoload.php';

class PipitTemplateFilter_phone extends PerchTemplateFilter {
    
    public function filterBeforeProcessing($value, $valueIsMarkup = false) {
        
        $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
        $PhoneNumber = $country = false;

        /**
         * Convert letters to numbers
         * e.g. '1-800-Got-Junk' = '18004685865'
         * See:
         * https://community.perchcms.com/forum/thread/334-phone-number-template-filter/?postID=1639#post1639
         * 
         * https://en.wikipedia.org/wiki/Telephone_keypad
         */
        $letters = range('A', 'Z');
        $numbers = [2,2,2,3,3,3,4,4,4,5,5,5,6,6,6,7,7,7,7,8,8,8,9,9,9,9];
        $clean_num = str_replace($letters, $numbers, strtoupper($value));


        // remove all non-numerical characters
        $output = $clean_num = preg_replace('/[^0-9\+]/', '', $clean_num);
        


        // get default country or use the one specified in tag attribute
        if(defined('PIPIT_PHONE_COUNTRY')) $country = PIPIT_PHONE_COUNTRY;
        if($this->Tag->country) $country = strtoupper($this->Tag->country);


        // parse only if we need to format later with libphonenumber
        // i.e. only if the output attribute is used
        if ($country && $this->Tag->output) {
            try {
                $PhoneNumber = $phoneUtil->parse($clean_num, $country);
                PerchUtil::debug($PhoneNumber);

                if(!$phoneUtil->isValidNumber($PhoneNumber)) {
                    PerchUtil::debug("The phone number $clean_num is not a valid $country phone number", 'notice');
                }
                
            } catch (\libphonenumber\NumberParseException $e) {
                PerchUtil::debug($e, 'error');
            }
        }



        // format
        if($PhoneNumber && $this->Tag->output) {
            switch($this->Tag->output) {
                case 'E164':
                    $output = $phoneUtil->format($PhoneNumber, \libphonenumber\PhoneNumberFormat::E164);
                    break;

                case 'RFC3966':
                case 'tel_link':
                    $output = $phoneUtil->format($PhoneNumber, \libphonenumber\PhoneNumberFormat::RFC3966);
                    break;


                case 'national':
                    $output = $phoneUtil->format($PhoneNumber, \libphonenumber\PhoneNumberFormat::NATIONAL);
                    break;

                case 'international':
                    $output = $phoneUtil->format($PhoneNumber, \libphonenumber\PhoneNumberFormat::INTERNATIONAL);
                    break;
            }
        }





        return $output;
    }
}


PerchSystem::register_template_filter('phone', 'PipitTemplateFilter_phone');