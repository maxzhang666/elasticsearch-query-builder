<?php

namespace Spatie\ElasticsearchQueryBuilder\Queries;

class PrefixQuery implements Query
{
    protected string $field;
    /**
     * @var
     */
    protected $query;

    public static function create(
        $field,
        $query
    ): self
    {
        return new self($field, $query);
    }

    public function __construct(
        string $field,
               $query
    )
    {
        $this->query = $query;
        $this->field = $field;
    }

    public function toArray(): array
    {
        return [
            'prefix' => [
                $this->field => [
                    'value' => $this->query,
                ],
            ],
        ];
    }
}
