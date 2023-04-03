<?php

/**
 * isActiveNavItem
 * ---------------
 * Checks if a nav item is the active page
 *
 * @param string $name
 * @return boolean
 */
function isActiveNavItem(string $name): bool
{
    return str_contains($_SERVER['REQUEST_URI'], $name);
}