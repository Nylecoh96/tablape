<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8ad16be4b6ad6bb5692c6ca98d4a0f0
{
    public static $files = array (
        '0509b34a4bd7aebefeac629c9dc8a978' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/notice-functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WP_Meteor\\Rest\\' => 15,
            'WP_Meteor\\Frontend\\' => 19,
            'WP_Meteor\\Engine\\' => 17,
            'WP_Meteor\\Blocker\\' => 18,
            'WP_Meteor\\Backend\\' => 18,
            'WP_Meteor\\Ajax\\' => 15,
            'WPDesk\\PluginBuilder\\' => 21,
            'WPDesk\\Notice\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WP_Meteor\\Rest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/rest',
        ),
        'WP_Meteor\\Frontend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/frontend',
        ),
        'WP_Meteor\\Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
        'WP_Meteor\\Blocker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/blocker',
        ),
        'WP_Meteor\\Backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/backend',
        ),
        'WP_Meteor\\Ajax\\' => 
        array (
            0 => __DIR__ . '/../..' . '/ajax',
        ),
        'WPDesk\\PluginBuilder\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpdesk/wp-builder/src',
        ),
        'WPDesk\\Notice\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPDesk\\Notice\\AjaxHandler' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice/AjaxHandler.php',
        'WPDesk\\Notice\\Factory' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice/Factory.php',
        'WPDesk\\Notice\\Notice' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice/Notice.php',
        'WPDesk\\Notice\\PermanentDismissibleNotice' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice/PermanentDismissibleNotice.php',
        'WPDesk\\PluginBuilder\\BuildDirector\\LegacyBuildDirector' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/BuildDirector/LegacyBuildDirector.php',
        'WPDesk\\PluginBuilder\\Builder\\AbstractBuilder' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Builder/AbstractBuilder.php',
        'WPDesk\\PluginBuilder\\Builder\\InfoActivationBuilder' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Builder/InfoActivationBuilder.php',
        'WPDesk\\PluginBuilder\\Builder\\InfoBuilder' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Builder/InfoBuilder.php',
        'WPDesk\\PluginBuilder\\Plugin\\AbstractPlugin' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/AbstractPlugin.php',
        'WPDesk\\PluginBuilder\\Plugin\\Activateable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/Activateable.php',
        'WPDesk\\PluginBuilder\\Plugin\\ActivationAware' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/ActivationAware.php',
        'WPDesk\\PluginBuilder\\Plugin\\ActivationTracker' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/ActivationTracker.php',
        'WPDesk\\PluginBuilder\\Plugin\\Conditional' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/Conditional.php',
        'WPDesk\\PluginBuilder\\Plugin\\Deactivateable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/Deactivateable.php',
        'WPDesk\\PluginBuilder\\Plugin\\Hookable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/Hookable.php',
        'WPDesk\\PluginBuilder\\Plugin\\HookableCollection' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/HookableCollection.php',
        'WPDesk\\PluginBuilder\\Plugin\\HookableParent' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/HookableParent.php',
        'WPDesk\\PluginBuilder\\Plugin\\HookablePluginDependant' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/HookablePluginDependant.php',
        'WPDesk\\PluginBuilder\\Plugin\\PluginAccess' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/PluginAccess.php',
        'WPDesk\\PluginBuilder\\Plugin\\SlimPlugin' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/SlimPlugin.php',
        'WPDesk\\PluginBuilder\\Plugin\\TemplateLoad' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/TemplateLoad.php',
        'WPDesk\\PluginBuilder\\Storage\\Exception\\ClassAlreadyExists' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/Exception/ClassAlreadyExists.php',
        'WPDesk\\PluginBuilder\\Storage\\Exception\\ClassNotExists' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/Exception/ClassNotExists.php',
        'WPDesk\\PluginBuilder\\Storage\\PluginStorage' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/PluginStorage.php',
        'WPDesk\\PluginBuilder\\Storage\\StaticStorage' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/StaticStorage.php',
        'WPDesk\\PluginBuilder\\Storage\\StorageFactory' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/StorageFactory.php',
        'WPDesk\\PluginBuilder\\Storage\\WordpressFilterStorage' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/WordpressFilterStorage.php',
        'WPDesk_Buildable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Buildable.php',
        'WPDesk_Has_Plugin_Info' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Has_Plugin_Info.php',
        'WPDesk_Plugin_Info' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Plugin_Info.php',
        'WPDesk_Translable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Translable.php',
        'WPDesk_Translatable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Translatable.php',
        'WP_Meteor\\Backend\\ActDeact' => __DIR__ . '/../..' . '/backend/ActDeact.php',
        'WP_Meteor\\Backend\\Enqueue' => __DIR__ . '/../..' . '/backend/Enqueue.php',
        'WP_Meteor\\Backend\\InstUninst' => __DIR__ . '/../..' . '/backend/InstUninst.php',
        'WP_Meteor\\Backend\\SaveSettings' => __DIR__ . '/../..' . '/backend/SaveSettings.php',
        'WP_Meteor\\Backend\\SettingsPage' => __DIR__ . '/../..' . '/backend/SettingsPage.php',
        'WP_Meteor\\Blocker\\Base' => __DIR__ . '/../..' . '/blocker/Base.php',
        'WP_Meteor\\Blocker\\Event' => __DIR__ . '/../..' . '/blocker/Event.php',
        'WP_Meteor\\Blocker\\Exclusions\\Compatibility' => __DIR__ . '/../..' . '/blocker/Exclusions/Compatibility.php',
        'WP_Meteor\\Blocker\\Exclusions\\Exclude' => __DIR__ . '/../..' . '/blocker/Exclusions/Exclude.php',
        'WP_Meteor\\Blocker\\Exclusions\\GDPR' => __DIR__ . '/../..' . '/blocker/Exclusions/GDPR.php',
        'WP_Meteor\\Blocker\\FirstInteraction\\Base' => __DIR__ . '/../..' . '/blocker/FirstInteraction/Base.php',
        'WP_Meteor\\Blocker\\FirstInteraction\\UltimateReorder' => __DIR__ . '/../..' . '/blocker/FirstInteraction/UltimateReorder.php',
        'WP_Meteor\\Blocker\\Integration\\ElementorAnimations' => __DIR__ . '/../..' . '/blocker/Integration/ElementorAnimations.php',
        'WP_Meteor\\Blocker\\Integration\\ElementorPP' => __DIR__ . '/../..' . '/blocker/Integration/ElementorPP.php',
        'WP_Meteor\\Engine\\Base' => __DIR__ . '/../..' . '/engine/Base.php',
        'WP_Meteor\\Engine\\Initialize' => __DIR__ . '/../..' . '/engine/Initialize.php',
        'WP_Meteor\\Engine\\Is_Methods' => __DIR__ . '/../..' . '/engine/Is_Methods.php',
        'WP_Meteor\\Frontend\\Base' => __DIR__ . '/../..' . '/frontend/Base.php',
        'WP_Meteor\\Frontend\\Rewrite' => __DIR__ . '/../..' . '/frontend/Rewrite.php',
        'WP_Meteor\\Rest\\Marketing' => __DIR__ . '/../..' . '/rest/Marketing.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8ad16be4b6ad6bb5692c6ca98d4a0f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8ad16be4b6ad6bb5692c6ca98d4a0f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8ad16be4b6ad6bb5692c6ca98d4a0f0::$classMap;

        }, null, ClassLoader::class);
    }
}
