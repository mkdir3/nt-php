<?php 

class FormSanitizer{
    
    public static function sanitizeFormString($inputText) {
        // Removing tags
        $inputText = strip_tags($inputText);
        // Remove any spaces
        $inputText = str_replace(" ", "", $inputText);
        // Lowercase all letters
        $inputText = strtolower($inputText);
        //  Than Uppercase first letter
        $inputText = ucfirst($inputText);

        return $inputText;
    }

    public static function sanitizeFormUsername($inputText) {
        // Removing tags
        $inputText = strip_tags($inputText);
        // Remove any spaces
        $inputText = str_replace(" ", "", $inputText);

        return $inputText;
    }

    public static function sanitizeFormPassword($inputText) {
        // Removing tags
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    public static function sanitizeFormEmail($inputText) {
        // Removing tags
        $inputText = strip_tags($inputText);
        // Remove any spaces
        $inputText = str_replace(" ", "", $inputText);

        return $inputText;
    }

}
