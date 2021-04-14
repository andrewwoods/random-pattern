<?php


namespace Awoods\RandomPattern;


class RandomPattern
{

    protected $alpha = [];

    public function __construct()
    {
        $this->alpha = range('A', 'Z');
    }

    /**
     * Check if the token from the pattern is valid
     *
     * A => Alphabetic characters
     * C => Clarified Alphabetic characters
     * D => Digit
     * X => C, D
     *
     * Some characters can be confused for one another, depending upon the font
     * used. The number one "1" and the lowercase L "l" are a good example.
     * The Clarified Alphabetic characters remove these characters from full
     * English alphabetic
     *
     * @param $token
     *
     * @return bool
     */
    public function isTokenValid($token): bool
    {
        if ($token === 'A') {
            return true;
        }

        if ($token === 'C') {
            return true;
        }

        if ($token === 'D') {
            return true;
        }

        if ($token === 'X') {
            return true;
        }

        return false;
    }

    /**
     * Check that the pattern only contains valid characters
     *
     * @param $pattern
     *
     * @return bool
     */
    public function isPatternValid($pattern): bool
    {
        $pattern = trim($pattern);
        if (strlen($pattern) === 0) {
            return false;
        }

        $tokens = str_split($pattern);
        foreach ($tokens as $token) {
            if ( ! $this->isTokenValid($token)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Provide a single method to create a random value based on a pattern
     *
     * Build up a string of randomized values based on a user-specified patterh.
     * This acts as a simple interface for generating the random string.
     *
     * @param $pattern
     *
     * @return string
     *
     * @throws \InvalidArgumentException|\Exception
     */
    public function generate($pattern)
    {
        if ( ! $this->isPatternValid($pattern)) {
            throw new \InvalidArgumentException('The pattern you used is not valid');
        }

        $output = '';

        $tokens = str_split($pattern);
        foreach ($tokens as $token) {
            if ($token === 'A') {
                $output .= $this->generateAlphabetic();
            }
            if ($token === 'D') {
                $output .= $this->generateDigit();
            }
        }

        return $output;
    }

    /**
     * @return int
     * @throws \Exception
     */
    public function generateDigit(): int
    {
        return random_int(0, 9);
    }

    /**
     * Selected a random alphabetic character
     *
     * @return string
     * @throws \Exception
     */
    public function generateAlphabetic(): string
    {
        $max = count($this->alpha) - 1;

        $index = random_int(0, $max);

        return $this->alpha[$index];
    }

}
