<?php

namespace Kanboard\Plugin\QMAnalysis;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {

        $this->template->hook->attach('template:analytic:sidebar', 'QMAnalysis:analytic/sidebar');
    }

    public function getPluginName()
    {
        return 'QMAnalysis';
    }

    public function getPluginDescription()
    {
        return t('Advanced analysis for QM');
    }

    public function getPluginAuthor()
    {
        return 'Martin Middeke';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

	    public function getPluginHomepage()
    {
        return 'https://github.com/Busfreak/QMAnalysis';
    }
}