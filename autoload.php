<?php

spl_autoload_register(function($fqn) {
    require sprintf('%s.php', implode(DIRECTORY_SEPARATOR, explode('\\', $fqn)));
});
