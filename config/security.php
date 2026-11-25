<?php

return [
    // Only server operators may grant administration to existing account IDs.
    'admin_user_ids' => array_values(array_filter(array_map('trim', explode(',', (string) env('ADMIN_USER_IDS', ''))))),
];
