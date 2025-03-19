<?php

declare(strict_types=1);

namespace App\Util\Exception;

use LogicException;
use Throwable;

/** @phpstan-consistent-constructor */
class DetailedException extends LogicException
{
    /** @var ExceptionDetail[] */
    protected array $details = [];

    final public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function addDetail(ExceptionDetail $detail): self
    {
        $this->details[] = $detail;

        return $this;
    }

    /**
     * @return ExceptionDetail[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @return static
     */
    protected static function create(string $message, string $code): static
    {
        return (new static($message))
            ->addDetail(new ExceptionDetail($message, $code));
    }
}
