<?php

if ( ! function_exists('terminal_style'))
{
    function terminal_style($message, $color = null, $background = null, $style = null)
    {
        // Set default
        $color      = ( ! $color )          ? 'default' : $color ;
        $background = ( ! $background )     ? 'default' : $background ;
        $style      = ( ! $style )          ? 'default' : $style ;
        $code       = [];

        $textColorCodes = [
            // Colors
            'default'       => 39,
            'white'         => 97,
            'black'         => 30,
            'red'           => 31,
            'green'         => 32,
            'yellow'        => 33,
            'blue'          => 34,
            'magenta'       => 35,
            'cyan'          => 36,
            'gray'          => 37,

            // Light colors
            'light-gray'    => 37,
            'light-red'     => 91,
            'light-green'   => 92,
            'light-yellow'  => 93,
            'light-blue'    => 94,
            'light-magenta' => 95,
            'light-cyan'    => 96,

            // Dark colors
            'dark-gray'     => 90,
        ];

        $backgroundColorCodes = [
            // Colors
            'default'       => 39,
            'white'         => 39,
            'black'         => 40,
            'red'           => 41,
            'green'         => 42,
            'yellow'        => 43,
            'blue'          => 44,
            'magenta'       => 45,
            'cyan'          => 46,
            'gray'          => 47,

            // Light colors
            'light-gray'    => 47,
            'light-red'     => 101,
            'light-green'   => 102,
            'light-yellow'  => 103,
            'light-blue'    => 104,
            'light-magenta' => 105,
            'light-cyan'    => 106,

            // Dark colors
            'dark-gray'     => 100,
        ];

        $styleCodes = [
            'default'       => 0,
            'bold'          => 1,
            'dim'           => 2,
            'underlined'    => 4,
            'blink'         => 5,
            'reverse'       => 7,
            'hidden'        => 8,
            'password'      => 8,
        ];

        // Set style
        if(is_int($style))
            $code[] = $style;
        elseif( isset( $styleCodes[ $style ] ) )
            $code[] = $styleCodes[$style];
        else
            dd(" > terminal_style(): Text style '" . $style . "' does not exist. You can only use the following colors", array_keys($styleCodes));

        // Set background color
        if(is_int($background))
            $code[] = $background;
        elseif( isset( $backgroundColorCodes[ $background ] ) )
            $code[] = $backgroundColorCodes[$background];
        else
            dd(" > terminal_style(): Background color '" . $background . "' does not exist. You can only use the following colors", array_keys($backgroundColorCodes));

        // Set text color
        if(is_int($color))
            $code[] = $color;
        elseif( isset( $textColorCodes[ $color ] ) )
            $code[] = $textColorCodes[$color];
        else
            dd(" > terminal_style(): Text color '" . $color . "' does not exist. You can only use the following colors", array_keys($textColorCodes));

        // Set background
        return "\e[" . implode($code, ';') . "m" . $message . "\e[0m";
    }
}