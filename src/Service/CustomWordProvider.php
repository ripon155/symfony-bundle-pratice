<?php

namespace App\Service;

use KnpU\LoremIpsumBundle\KnpuWordProvider;

class CustomWordProvider extends KnpuWordProvider
{
	public function getWordList(): array
	{
		$words= parent::getWordList();
		$words[] = 'ripon';
		return $words;
	}
}