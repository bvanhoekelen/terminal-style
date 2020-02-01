<?php

declare(strict_types=1);

namespace src\Configuration;

/**
 * Class StyleConfigurations
 * @package src\Configuration
 */
final class StyleConfigurations
{
    const TEXT_COLOUR_CODES = [
        // Label
        'default' => 39,
        'primary' => 34,
        'success' => 32,
        'info' => 36,
        'warning' => 33,
        'danger' => 31,

        // Colors
        'white' => 97,
        'black' => 30,
        'red' => 31,
        'green' => 32,
        'yellow' => 33,
        'blue' => 34,
        'magenta' => 35,
        'cyan' => 36,
        'gray' => 37,

        // Light colors
        'light-gray' => 37,
        'light-red' => 91,
        'light-green' => 92,
        'light-yellow' => 93,
        'light-blue' => 94,
        'light-magenta' => 95,
        'light-cyan' => 96,

        // Dark colors
        'dark-gray' => 90,
    ];

    const BACKGROUND_COLOUR_CODES = [
        // Label
        'default' => 39,
        'primary' => 44,
        'success' => 42,
        'info' => 46,
        'warning' => 43,
        'danger' => 41,

        // Colors
        'white' => 39,
        'black' => 40,
        'red' => 41,
        'green' => 42,
        'yellow' => 43,
        'blue' => 44,
        'magenta' => 45,
        'cyan' => 46,
        'gray' => 47,

        // Light colors
        'light-gray' => 47,
        'light-red' => 101,
        'light-green' => 102,
        'light-yellow' => 103,
        'light-blue' => 104,
        'light-magenta' => 105,
        'light-cyan' => 106,

        // Dark colors
        'dark-gray' => 100,
    ];

    const STYLE_CODES = [
        'default' => 0,
        'bold' => 1,
        'dim' => 2,
        'italic' => 3,
        'underlined' => 4,
        'blink' => 5,
        'reverse' => 7,
        'hidden' => 8,
        'password' => 8,
    ];
}