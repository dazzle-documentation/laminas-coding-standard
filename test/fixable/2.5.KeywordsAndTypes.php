<?php

declare(strict_types=1);

namespace LaminasCodingStandardTest\fixed;

use function is_int;

class KeywordsAndTypes
{
    public function testLowerCaseKeyword(String $string): VOID
    {
        // All PHP reserved keywords and types MUST be in lower case.

        return Exit();
    }

    public function testLowerCaseConstant(string $var): bool
    {
        return $var === false || $var === null;
    }

    public function testLowerCaseType(string $var): INT
    {
        return (integer) $var;
    }

    public function testShortFormTypeKeywords(String $var): Bool
    {
        // Short form of type keywords MUST be used i.e. bool instead of boolean,
        // int instead of integer etc.

        return is_int($var);
    }
}
