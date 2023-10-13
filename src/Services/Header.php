<?php

namespace Kajoom\PhpCliStarter\Services;

use Symfony\Component\Console\Style\SymfonyStyle;

class Header
{
		/**
		 * Execute the command
		 *
		 * @param  string  $title
		 * @param  string $subtitle
		 * @return void
		 */
		public function display($io): void
		{
				global $hasRunHeader;
				
				if ($hasRunHeader) return;
				
				// Banner top.
				$title = "PHP CLI Starter";
				$subtitle = "Starter command-line tool";
				$io->banner($title, $subtitle);
				usleep(200);
				
				// Banner bottom.
				$message = 'Can you answer the simple math questions below?';
				$version = '0.0.1';
				$io->banner_bottom($message, $version);
				usleep(500);
				
				$hasRunHeader = true;
		}
		
}
