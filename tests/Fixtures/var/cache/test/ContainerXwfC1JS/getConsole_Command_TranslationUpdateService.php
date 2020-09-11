<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_update' shared service.

$this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($this->privates['translation.writer'] ?? $this->load('getTranslation_WriterService.php')), ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [], [0 => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 1 => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 2 => (\dirname(__DIR__, 6).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 3 => (\dirname(__DIR__, 6).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php')]);

$instance->setName('translation:update');

return $instance;