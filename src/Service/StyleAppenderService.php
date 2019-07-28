<?php

declare(strict_types=1);

namespace src\Service;

/**
 * Class StyleAppenderService
 * @package src\Service
 */
class StyleAppenderService
{
    /**
     * @var array
     */
    protected $styleMessages = [
        'background' => ' > terminal_style(): Background color "%s" does not exist. You can only use the background colors above',
        'text' => ' > terminal_style(): Text color "%s" does not exist. You can only use the following text colors',
        'style' => ' > terminal_style(): Text style "%s" does not exist. You can only use the text styles above',
    ];

    /**
     * Appends the style according to the type
     *
     * @param array $code Collection of codes for styling
     * @param int|string|null $color Color. Can either be string or an integer or null
     * @param array $configuration Configuration array (@see StyleConfigurations)
     * @param string $type The type of style is currently added to the code array
     *
     * @return array
     */
    public function appendStyle(array $code, $color, array $configuration, string $type): array
    {
        $color = (!$color) ? 'default' : $color;

        // Set text color
        if (\is_int($color))
            $code[] = $color;
        elseif (isset($configuration[$color]))
            $code[] = $configuration[$color];
        else {
            $this->printErrorMessage($type, $color, $configuration);
        }

        return $code;
    }

    /**
     * @param $type
     * @param $style
     * @param $styleCollection
     */
    protected function printErrorMessage($type, $style, $styleCollection): void
    {
        \print_r(\array_keys($styleCollection));
        die(\sprintf($this->styleMessages[$type], $style));
    }
}