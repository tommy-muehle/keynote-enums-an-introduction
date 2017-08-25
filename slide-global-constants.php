<?php

// app.php

const STATE_ACTIVE = 'active';
const STATE_COMPLETED = 'completed';

$app = new Application();
$app->setState(STATE_ACTIVE);

// ...

return $app->run();