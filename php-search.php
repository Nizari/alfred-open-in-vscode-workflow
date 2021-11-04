<?php

$query = $argv[1];

$paths = getenv('wds');

// todo echo error when no directories
$directories = explode(',', $paths);

$output = [
    'items' => [],
];
foreach ($directories as $key => $directory) {
    $result = glob($directory . '/*' . $query . '*', GLOB_ONLYDIR);
    foreach ($result as $key => $path) {
        $output['items'][] = [
            'type'     => 'directory',
            'title'    => basename($path),
            'subtitle' => $path,
            'arg'      => $path,
            'icon'     => [
                "type" => "fileicon",
                'path' => $path,
            ],
        ];
    }
}

echo json_encode($output);

exit;
