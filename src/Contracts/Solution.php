<?php

namespace Spatie\Ignition\Contracts;

interface Solution
{
    public function getSolutionTitle(): string;

    public function getSolutionDescription(): string;

    public function getDocumentationLinks(): array;
}
