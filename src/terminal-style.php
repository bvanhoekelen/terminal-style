<?php

declare(strict_types=1);

use src\Configuration\StyleConfigurations;
use src\Service\StyleAppenderService;

if (!function_exists('terminal_style')) {

    /**
     * @param null $message
     * @param null $color
     * @param null $background
     * @param null $style
     * @return string
     */
    function terminal_style($message = null, $color = null, $background = null, $style = null): string
    {
        if ($message === null) {
            return '';
        }

        $message = is_null($message) ? '' : $message;

        // Only for terminal
        if (php_sapi_name() !== "cli") {
            return $message;
        }

        // Only for linux not for windows (PowerShell)
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            return $message;
        }

        // Detect custom background mode
        if (is_int($color) and $color >= 16) {
            $background = 5;
            $style = 48;
        }

        // Set default
        $code = [];

        $service = new StyleAppenderService();
        $code = $service->appendStyle($code, $background, StyleConfigurations::BACKGROUND_COLOUR_CODES, 'background');
        $code = $service->appendStyle($code, $color, StyleConfigurations::TEXT_COLOUR_CODES, 'text');
        $code = $service->appendStyle($code, $style, StyleConfigurations::STYLE_CODES, 'style');

        // Set background
        return "\e[" . implode(';', $code) . "m" . $message . "\e[0m";
    }
}
