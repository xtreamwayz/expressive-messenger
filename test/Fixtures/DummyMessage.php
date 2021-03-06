<?php

declare(strict_types=1);

namespace Xtreamwayz\PsrContainerMessenger\Test\Fixtures;

class DummyMessage implements DummyMessageInterface
{
    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
