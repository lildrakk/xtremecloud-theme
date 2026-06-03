<?php
/**
 * Dummy class for Pelican theme registration.
 * Exists only to satisfy Pelican's plugin loader.
 * Does NOT execute any logic.
 */

namespace xtremecloud_theme;

if (!class_exists('xtremecloud_theme\\XtremeCloudTheme')) {
    class XtremeCloudTheme
    {
        public function __construct()
        {
            // No logic. No execution. No risk.
            return true;
        }
    }
}
