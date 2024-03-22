import ToggleSwitch from "./modules/ToggleSwitch";

document.addEventListener('DOMContentLoaded', () => {
    const toggleSwitch = new ToggleSwitch(document.getElementById('toggle-switch-on'), document.getElementById('toggle-switch-off'));
    document.getElementById('toggle-switch').addEventListener('click', () => toggleSwitch.toggle());
});