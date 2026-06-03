<?php

namespace xtremecloud_theme;

use Pterodactyl\Extensions\Themes\Theme;

class XtremeCloudTheme extends Theme
{
    public function __construct()
    {
        parent::__construct();
        $this->name = 'XtremeCloud Theme PRO';
        $this->author = 'Juan';
        $this->version = '2.0.0';
        $this->description = 'Professional theme customizer for Pelican with live preview, fonts, colors, CSS and branding.';
    }
}
