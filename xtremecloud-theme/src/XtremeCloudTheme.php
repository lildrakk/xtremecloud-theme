<?php

namespace xtremecloud_theme;

use Pterodactyl\Extensions\Themes\Theme;

class XtremeCloudTheme extends Theme
{
    /**
     * Constructor principal del tema.
     * Aquí defines los metadatos que Pelican mostrará en el panel.
     */
    public function __construct()
    {
        parent::__construct();

        $this->name = 'XtremeCloud Theme PRO';
        $this->author = 'Juan';
        $this->version = '2.0.0';
        $this->description = 'Professional theme customizer for Pelican with live preview, fonts, colors, CSS and branding.';
    }

    /**
     * Método opcional: cargar assets automáticamente.
     * Si quieres que Pelican cargue tu CSS y JS sin tocar el panel,
     * descomenta estas líneas.
     */
    /*
    public function register()
    {
        $this->addCss('/plugins/xtremecloud-theme/theme.css');
        $this->addJs('/plugins/xtremecloud-theme/theme.js');
    }
    */
}
