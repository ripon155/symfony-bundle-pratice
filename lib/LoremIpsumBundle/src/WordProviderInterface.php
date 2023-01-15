<?php 
namespace KnpU\LoremIpsomeBundle;

interface WordProviderInterface
{
	public function getWordList(): array;
}