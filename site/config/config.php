<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
  'debug' => true,
  'languages' => true,
  'yaml.handler' => 'symfony',
	'date.handler' => 'intl',
  'slugs.maxlength' => 500,
  'sitemap.ignore' => ['error'],
  'hooks' => require_once __DIR__ . '/hooks.php',
  'thumbs' => require_once __DIR__ . '/thumbs.php',
  'routes' => require_once __DIR__ . '/routes.php',
  'dgsiegel.kirby-tidy-html.enabled' => true,
  'dgsiegel.kirby-tidy-html.options' => [
    'drop-empty-paras'    => 0,
    'drop-empty-elements' => 0,
    'indent'              => 2,
    'indent-spaces'       => 2,
    'preserve-entities'   => 1,
    'wrap'                => 0,
  ],
];
