<?php

function init_custom_blocks()
{
    register_block_type(__DIR__ . "/build/feature-block");
}

add_action("init", "init_custom_blocks");
