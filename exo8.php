<?php
$list = [];

$prompt_result = readline('What do you want to do? (add, delete, read, exit) ');

while ($prompt_result !== 'exit') {
    if ($prompt_result === 'add') {
        $item = readline('What do you want to add? ');
        $list[] = $item;
    } elseif ($prompt_result === 'delete') {
        $index = (int) readline('What do you want to delete? ');
        if (gettype($index) == 'integer' && $index >= 0 && $index < count($list)) {
            unset($list[$index]);
            $list = array_values($list);
        } else {
            echo "Invalid index. Please enter a valid number corresponding to the item you want to delete.\n";
        }
    } elseif ($prompt_result === 'read') {
        echo "Your list:\n";
        for ($i = 0; $i < count($list); $i++) {
            echo "- " . "[{$i}] " . $list[$i] . "\n";
        }
    } else {
        echo "Invalid option. Please choose from (add, delete, read, exit).\n";
    }

    $prompt_result = readline('What do you want to do? (add, delete, read, exit) ');
}
echo "Goodbye!\n";
