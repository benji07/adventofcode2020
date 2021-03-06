<?php

declare(strict_types=1);

namespace AdventOfCode\Day6;

class GroupCollection
{
    /** @var Group[] */
    private array $groups;

    public function __construct(Group ...$groups)
    {
        $this->groups = $groups;
    }

    public function getPart1Result(): int
    {
        return (int) array_sum(array_map(fn (Group $group): int => $group->count(), $this->groups));
    }

    public function getPart2Result(): int
    {
        return (int) array_sum(array_map(fn (Group $group): int => $group->countYes(), $this->groups));
    }
}
