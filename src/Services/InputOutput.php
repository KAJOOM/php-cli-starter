<?php

namespace Kajoom\PhpCliStarter\Services;

use Symfony\Component\Console\Style\SymfonyStyle;

class InputOutput extends SymfonyStyle
{
	
		/**
		 * Get banner content.
		 */
		public function banner(string $title, string $subtitle): void
		{
			$this->text([
					'',
					' 888                d8b',
					' 888                Y8P',
					' 888',
					' 888  888  8888b.  8888  .d88b.   .d88b.  88888b.d88b.',
					' 888 .88P     "88b "888 d88""88b d88""88b 888 "888 "88b',
					' 888888K  .d888888  888 888  888 888  888 888  888  888',
					' 888 "88b 888  888  888 Y88..88P Y88..88P 888  888  888',
					' 888  888 "Y888888  888  "Y88P"   "Y88P"  888  888  888',
					'                   888',
					"   KAJOOM TOOLS   d88P {$title}",
					"                888P   {$subtitle}",
					'',
			]);
		}
		
		/**
		 * Get bottom banner content.
		 */
		public function banner_bottom(string $message, string $version): void
		{
			$this->text([
				" ====================================================== ",
				"                  Version : $version                 ",
				" ====================================================== ",
			]);
			
			if (!empty($message)) {
			$this->text([
				"",
				" $message",
			]);
			}
		}
	
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
        $this->block(sprintf(' 🎉  %s', $message), null, 'fg=white;bg=cyan', ' ', true);
    }

    /**
     * Display a message in case of wrong answer.
     */
    public function wrong(string $message): void
    {
        $this->block(sprintf(' 😮  %s', $message), null, 'fg=white;bg=magenta', ' ', true);
    }
}
