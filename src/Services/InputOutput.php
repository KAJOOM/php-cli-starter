<?php

namespace Kajoom\PhpCliStarter\Services;

use Symfony\Component\Console\Style\SymfonyStyle;

class InputOutput extends SymfonyStyle
{
    /**
     * Ask a question and return the answer.
     */
    public function question(string $question): string
    {
        $output = $this->ask(sprintf(' ✍️  %s', $question));
        return $output === null ? '': $output;
    }

    /**
     * Display a message in case of right answer.
     */
    public function right(string $message): void
    {
        $this->block(sprintf(' 🎉  %s', $message), null, 'fg=white;bg=green', ' ', true);
    }

    /**
     * Display a message in case of wrong answer.
     */
    public function wrong(string $message): void
    {
        $this->block(sprintf(' 😮  %s', $message), null, 'fg=white;bg=red', ' ', true);
    }
}
