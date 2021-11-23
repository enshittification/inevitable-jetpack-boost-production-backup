<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_3_1_beta
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JShrink' => 
            array (
                0 => __DIR__ . '/..' . '/tedivm/jshrink/src',
            ),
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\A8c_Mc_Stats' => __DIR__ . '/..' . '/automattic/jetpack-a8c-mc-stats/src/class-a8c-mc-stats.php',
        'Automattic\\Jetpack\\Admin_UI\\Admin_Menu' => __DIR__ . '/..' . '/automattic/jetpack-admin-ui/src/class-admin-menu.php',
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/..' . '/automattic/jetpack-assets/src/class-assets.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Automattic\\Jetpack\\Config' => __DIR__ . '/..' . '/automattic/jetpack-config/src/class-config.php',
        'Automattic\\Jetpack\\Connection\\Client' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-client.php',
        'Automattic\\Jetpack\\Connection\\Error_Handler' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-error-handler.php',
        'Automattic\\Jetpack\\Connection\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-manager.php',
        'Automattic\\Jetpack\\Connection\\Manager_Interface' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/interface-manager.php',
        'Automattic\\Jetpack\\Connection\\Nonce_Handler' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-nonce-handler.php',
        'Automattic\\Jetpack\\Connection\\Package_Version' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-package-version.php',
        'Automattic\\Jetpack\\Connection\\Package_Version_Tracker' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-package-version-tracker.php',
        'Automattic\\Jetpack\\Connection\\Plugin' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-plugin.php',
        'Automattic\\Jetpack\\Connection\\Plugin_Storage' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-plugin-storage.php',
        'Automattic\\Jetpack\\Connection\\REST_Connector' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-rest-connector.php',
        'Automattic\\Jetpack\\Connection\\Rest_Authentication' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-rest-authentication.php',
        'Automattic\\Jetpack\\Connection\\Secrets' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-secrets.php',
        'Automattic\\Jetpack\\Connection\\Server_Sandbox' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-server-sandbox.php',
        'Automattic\\Jetpack\\Connection\\Tokens' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-tokens.php',
        'Automattic\\Jetpack\\Connection\\Urls' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-urls.php',
        'Automattic\\Jetpack\\Connection\\Utils' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-utils.php',
        'Automattic\\Jetpack\\Connection\\Webhooks' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-webhooks.php',
        'Automattic\\Jetpack\\Connection\\XMLRPC_Async_Call' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-xmlrpc-async-call.php',
        'Automattic\\Jetpack\\Connection\\XMLRPC_Connector' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-xmlrpc-connector.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/..' . '/automattic/jetpack-constants/src/class-constants.php',
        'Automattic\\Jetpack\\Device_Detection' => __DIR__ . '/..' . '/automattic/jetpack-device-detection/src/class-device-detection.php',
        'Automattic\\Jetpack\\Device_Detection\\User_Agent_Info' => __DIR__ . '/..' . '/automattic/jetpack-device-detection/src/class-user-agent-info.php',
        'Automattic\\Jetpack\\Heartbeat' => __DIR__ . '/..' . '/automattic/jetpack-heartbeat/src/class-heartbeat.php',
        'Automattic\\Jetpack\\Jetpack_Lazy_Images' => __DIR__ . '/..' . '/automattic/jetpack-lazy-images/src/lazy-images.php',
        'Automattic\\Jetpack\\Redirect' => __DIR__ . '/..' . '/automattic/jetpack-redirect/src/class-redirect.php',
        'Automattic\\Jetpack\\Roles' => __DIR__ . '/..' . '/automattic/jetpack-roles/src/class-roles.php',
        'Automattic\\Jetpack\\Status' => __DIR__ . '/..' . '/automattic/jetpack-status/src/class-status.php',
        'Automattic\\Jetpack\\Status\\Host' => __DIR__ . '/..' . '/automattic/jetpack-status/src/class-host.php',
        'Automattic\\Jetpack\\Terms_Of_Service' => __DIR__ . '/..' . '/automattic/jetpack-terms-of-service/src/class-terms-of-service.php',
        'Automattic\\Jetpack\\Tracking' => __DIR__ . '/..' . '/automattic/jetpack-tracking/src/class-tracking.php',
        'Automattic\\Jetpack_Boost\\Admin\\Admin' => __DIR__ . '/../..' . '/app/admin/class-admin.php',
        'Automattic\\Jetpack_Boost\\Admin\\Admin_Notice' => __DIR__ . '/../..' . '/app/admin/class-admin-notice.php',
        'Automattic\\Jetpack_Boost\\Jetpack_Boost' => __DIR__ . '/../..' . '/app/class-jetpack-boost.php',
        'Automattic\\Jetpack_Boost\\Lib\\Analytics' => __DIR__ . '/../..' . '/app/lib/class-analytics.php',
        'Automattic\\Jetpack_Boost\\Lib\\Assets' => __DIR__ . '/../..' . '/app/lib/class-assets.php',
        'Automattic\\Jetpack_Boost\\Lib\\CLI' => __DIR__ . '/../..' . '/app/lib/class-cli.php',
        'Automattic\\Jetpack_Boost\\Lib\\Cacheable' => __DIR__ . '/../..' . '/app/lib/class-cacheable.php',
        'Automattic\\Jetpack_Boost\\Lib\\Config' => __DIR__ . '/../..' . '/app/lib/class-config.php',
        'Automattic\\Jetpack_Boost\\Lib\\Connection' => __DIR__ . '/../..' . '/app/lib/class-connection.php',
        'Automattic\\Jetpack_Boost\\Lib\\Debug' => __DIR__ . '/../..' . '/app/lib/class-debug.php',
        'Automattic\\Jetpack_Boost\\Lib\\Environment_Change_Detector' => __DIR__ . '/../..' . '/app/lib/class-environment-change-detector.php',
        'Automattic\\Jetpack_Boost\\Lib\\Minify' => __DIR__ . '/../..' . '/app/lib/class-minify.php',
        'Automattic\\Jetpack_Boost\\Lib\\Nonce' => __DIR__ . '/../..' . '/app/lib/class-nonce.php',
        'Automattic\\Jetpack_Boost\\Lib\\Output_Filter' => __DIR__ . '/../..' . '/app/lib/class-output-filter.php',
        'Automattic\\Jetpack_Boost\\Lib\\Speed_Score' => __DIR__ . '/../..' . '/app/lib/class-speed-score.php',
        'Automattic\\Jetpack_Boost\\Lib\\Speed_Score_History' => __DIR__ . '/../..' . '/app/lib/class-speed-score-history.php',
        'Automattic\\Jetpack_Boost\\Lib\\Speed_Score_Request' => __DIR__ . '/../..' . '/app/lib/class-speed-score-request.php',
        'Automattic\\Jetpack_Boost\\Lib\\Storage_Post_Type' => __DIR__ . '/../..' . '/app/lib/class-storage-post-type.php',
        'Automattic\\Jetpack_Boost\\Lib\\Transient' => __DIR__ . '/../..' . '/app/lib/class-transient.php',
        'Automattic\\Jetpack_Boost\\Lib\\Url' => __DIR__ . '/../..' . '/app/lib/class-url.php',
        'Automattic\\Jetpack_Boost\\Lib\\Utils' => __DIR__ . '/../..' . '/app/lib/class-utils.php',
        'Automattic\\Jetpack_Boost\\Lib\\Viewport' => __DIR__ . '/../..' . '/app/lib/class-viewport.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Admin_Bar_Css_Compat' => __DIR__ . '/../..' . '/app/modules/critical-css/class-admin-bar-css-compat.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Critical_CSS' => __DIR__ . '/../..' . '/app/modules/critical-css/class-critical-css.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Critical_CSS_State' => __DIR__ . '/../..' . '/app/modules/critical-css/class-critical-css-state.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Critical_CSS_Storage' => __DIR__ . '/../..' . '/app/modules/critical-css/class-critical-css-storage.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Providers\\Archive_Provider' => __DIR__ . '/../..' . '/app/modules/critical-css/providers/class-archive-provider.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Providers\\Post_ID_Provider' => __DIR__ . '/../..' . '/app/modules/critical-css/providers/class-post-id-provider.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Providers\\Provider' => __DIR__ . '/../..' . '/app/modules/critical-css/providers/class-provider.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Providers\\Singular_Post_Provider' => __DIR__ . '/../..' . '/app/modules/critical-css/providers/class-singular-post-provider.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Providers\\Taxonomy_Provider' => __DIR__ . '/../..' . '/app/modules/critical-css/providers/class-taxonomy-provider.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Providers\\WP_Core_Provider' => __DIR__ . '/../..' . '/app/modules/critical-css/providers/class-wp-core-provider.php',
        'Automattic\\Jetpack_Boost\\Modules\\Critical_CSS\\Regenerate_Admin_Notice' => __DIR__ . '/../..' . '/app/modules/critical-css/class-regenerate-admin-notice.php',
        'Automattic\\Jetpack_Boost\\Modules\\Lazy_Images\\Lazy_Images' => __DIR__ . '/../..' . '/app/modules/lazy-images/class-lazy-images.php',
        'Automattic\\Jetpack_Boost\\Modules\\Module' => __DIR__ . '/../..' . '/app/modules/class-module.php',
        'Automattic\\Jetpack_Boost\\Modules\\Render_Blocking_JS\\Render_Blocking_JS' => __DIR__ . '/../..' . '/app/modules/render-blocking-js/class-render-blocking-js.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'JShrink\\Minifier' => __DIR__ . '/..' . '/tedivm/jshrink/src/JShrink/Minifier.php',
        'Jetpack_IXR_Client' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-ixr-client.php',
        'Jetpack_IXR_ClientMulticall' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-ixr-clientmulticall.php',
        'Jetpack_Options' => __DIR__ . '/..' . '/automattic/jetpack-options/legacy/class-jetpack-options.php',
        'Jetpack_Signature' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-signature.php',
        'Jetpack_Tracks_Client' => __DIR__ . '/..' . '/automattic/jetpack-tracking/legacy/class-jetpack-tracks-client.php',
        'Jetpack_Tracks_Event' => __DIR__ . '/..' . '/automattic/jetpack-tracking/legacy/class-jetpack-tracks-event.php',
        'Jetpack_XMLRPC_Server' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-xmlrpc-server.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_3_1_beta::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_3_1_beta::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_3_1_beta::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_3_1_beta::$classMap;

        }, null, ClassLoader::class);
    }
}
