<?php namespace Keios\Multisite\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;
use Keios\Multisite\Models\Setting;
use Cache;
use Flash;
use Lang;

/**
 * Settings Back-end Controller
 */
class Settings extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['keios.multisite.manage_domains'];
    
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Keios.Multisite', 'multisite');
    }

    public function onDelete()
    {
        $selected = post('checked');
        Setting::destroy($selected);
        return $this->listRefresh();
    }

    public function onClearCache()
    {
        Cache::forget('keios_multisite_settings');
        Flash::success(Lang::get('keios.multisite::lang.flash.cache-clear'));
    }
}
