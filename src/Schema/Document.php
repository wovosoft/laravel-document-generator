<?php

namespace Wovosoft\LaravelDocumentGenerator\Schema;

use DateTimeImmutable;
use DateTimeInterface;
use Wovosoft\LaravelDocumentGenerator\Schema\Contracts\DocumentElementInterface;

class Document
{
    /**
     * @var DocumentElementInterface[]
     */
    protected array  $children    = [];
    protected string $size        = 'A4';
    protected string $orientation = 'portrait';

    public function __construct(
        protected string $title = '',
        protected string $description = '',
        protected string $creator = '',
        protected string $subject = '',
        protected string $keywords = '',
        protected string $company = '',
        protected string $category = '',
        protected string $manager = '',
        protected ?DateTimeInterface $createdAt = null
    )
    {
        $this->createdAt = $createdAt ?? now();
    }

    public static function make(...$args): static
    {
        return new static(...$args);
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): static
    {
        $this->size = $size;
        return $this;
    }

    public function addChild(DocumentElementInterface $child): static
    {
        $this->children[] = $child;
        return $this;
    }

    /**
     * @param DocumentElementInterface[] $children
     */
    public function setChildren(array $children): static
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return DocumentElementInterface[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getCreator(): string
    {
        return $this->creator;
    }

    public function setCreator(string $creator): static
    {
        $this->creator = $creator;
        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): static
    {
        $this->subject = $subject;
        return $this;
    }

    public function getKeywords(): string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): static
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): static
    {
        $this->company = $company;
        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;
        return $this;
    }

    public function getManager(): string
    {
        return $this->manager;
    }

    public function setManager(string $manager): static
    {
        $this->manager = $manager;
        return $this;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @throws \DateMalformedStringException
     */
    public static function fromArray(array $data): static
    {
        return new static(
            title      : $data['title'] ?? '',
            description: $data['description'] ?? '',
            creator    : $data['creator'] ?? '',
            subject    : $data['subject'] ?? '',
            keywords   : $data['keywords'] ?? '',
            company    : $data['company'] ?? '',
            category   : $data['category'] ?? '',
            manager    : $data['manager'] ?? '',
            createdAt  : isset($data['created_at']) ? new DateTimeImmutable($data['created_at']) : null,
        );
    }

    public function toArray(): array
    {
        return [
            'title'       => $this->title,
            'description' => $this->description,
            'creator'     => $this->creator,
            'subject'     => $this->subject,
            'keywords'    => $this->keywords,
            'company'     => $this->company,
            'category'    => $this->category,
            'manager'     => $this->manager,
            'created_at'  => $this->createdAt->format('c'),
        ];
    }
}
