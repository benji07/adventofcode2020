<?php

declare(strict_types=1);

namespace AdventOfCode\Day6;

class Group
{
    /** @var string[] */
    private array $anwsers;

    public function __construct(string ...$anwsers)
    {
        $this->anwsers = $anwsers;
    }

    public function count(): int
    {
        return \count((array) count_chars(implode('', $this->anwsers), 1));
    }

    public function countYes(): int
    {
        return \count(
            array_filter((array) count_chars(implode('', $this->anwsers), 1), fn (int $nb) => $nb === \count($this->anwsers))
        );
    }
}
