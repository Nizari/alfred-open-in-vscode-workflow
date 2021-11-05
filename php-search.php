<?php

use Alfred\Workflows\Workflow;

require __DIR__ . '/vendor/autoload.php';

$query = $argv[1] ?? '';

$paths = getenv('wds');

// todo echo error when no directories
$directories = explode(',', $paths);

$workflow = new Workflow();
foreach ($directories as $key => $directory) {
    $result = glob($directory . '/*' . $query . '*', GLOB_ONLYDIR);
    foreach ($result as $key => $path) {
        $workflow->result()
            ->uid(basename($path))
            ->title(basename($path))
            ->subtitle($path)
            ->arg($path)
            ->icon('images/icon.png');
    }
}

echo $workflow->output();

exit;
