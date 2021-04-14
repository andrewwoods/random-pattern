<?php


namespace Awoods\RandomPattern;



class RandomPattern {

    protected $pattern = '';

    public function __construct($pattern) {
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
    public function isTokenValid($token) : bool {
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

}