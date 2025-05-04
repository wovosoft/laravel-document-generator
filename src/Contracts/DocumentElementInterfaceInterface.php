<?php

namespace Wovosoft\LaravelDocumentGenerator\Schema\Contracts;

interface DocumentElementInterface
{
    /**
     * Type of element, like "header", "paragraph", "image", "table"
     */
    public function getType(): string;

    /**
     * Structured array representation (used for serialization, rendering, etc.)
     */
    public function toArray(): array;
}
