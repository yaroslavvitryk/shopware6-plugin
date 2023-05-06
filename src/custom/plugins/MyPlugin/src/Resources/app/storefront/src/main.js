// Import all necessary Storefront plugins
import MyPlugin from './MyPlugin/my-plugin';

// Register your plugin via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register('MyPlugin', MyPlugin);