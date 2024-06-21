=== Editor Cleanup For Oxygen: FDP add-on to cleanup the Oxygen editor ===
Contributors: giuse
Tags:  cleanup, oxygen, performance, debugging, conflicts
Requires at least: 4.6
Tested up to: 6.5
Stable tag: 0.0.9
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

FDP add-on to cleanup Oxygen in the backend. Your Oxygen backend will be faster and without conflicts with other plugins.


== Description ==

Editor Cleanup For Oxygen is an add-on of <a href="https://wordpress.org/plugins/freesoul-deactivate-plugins/" target="_blank">Freesoul Deactivate Plugins</a> to **clean up the editor of <a href="https://oxygenbuilder.com/" target="_blank">Oxygen</a>**.

It will not only clean up the assets added by other plugins, their PHP code will not run either.

The editor of Oxygen will load faster and without conflicts with other plugins.

Both Freesoul Deactivate Plugins and Oxygen must be installed and active, in another case this plugin will not run.

== How to clean up the Oxygen editor ==
* Install and activate Freesoul Deactivate Plugins if not active yet
* Install and activate Oxygen if not active yet
* Install and activate Editor Cleanup For Oxygen
* Go to Oxygen => Editor CLeanup
* Click on "Outer editor cleanup" to disable plugins that the outer editor does't need (usually no plugin needed)
* Click on "Inner editor cleanup" to disable plugins that the inner editor does't need (the inner editor is like the page on frontend, but loaded inside the Oxygen editor)
* Click on "Editor loading cleanup" to disable the plugins that are called during the loading of the editor (usually no plugin needed, disabling plugins here can solve conflicts with other plugins)


== Similar add-ons to clean up==
* <a href="https://wordpress.org/plugins/editor-cleanup-for-elementor/">Editor Cleanup For Elementor</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-avada/">Editor Cleanup For Avada</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-wpbakery/">Editor Cleanup For WPBakery</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-divi-builder/">Editor Cleanup For Divi Builder</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-flatsome/">Editor Cleanup For Flatsome</a>


== Help ==
For any question or if something doesn't work, don't hesitate to open a thread on the <a href="https://wordpress.org/support/plugin/editor-cleanup-for-oxygen/">support forum</a>.

Read also <a href="https://freesoul-deactivate-plugins.com/editor-cleanup-for-oxygen/">How to clean up the Oxygen editor</a> for more details.


== Changelog ==

= 0.0.9 =
*Fix: Seggings not saving. Need FDP >= v. 2.1.7

= 0.0.8 =
*Fix: Admin menu not visible for versions of FDP <= 1.9.5.2

= 0.0.7 =
*Fix: fatal error in the plugin settings page
*Fix: plugins not disabled when editing Oxygen template

= 0.0.6 =
*Fix: fatal error if Editor Cleanup For Elementor is also active

= 0.0.5 =
*Fix: loading editor missing the navigation rendering action

= 0.0.4 =
*Improvement: prevent Oxygen form disabling the theme in the plugin setting pages to avoid eventual conflicts with other plugins that require a theme

= 0.0.3 =
*Removed: animation of the gear below the button Editor Loading Cleanup in the settings page

= 0.0.2 =
*Improved: admin interface

= 0.0.1 =
*Initial release



== Screenshots ==

1. How disable plugins in the editor of Oxygen
