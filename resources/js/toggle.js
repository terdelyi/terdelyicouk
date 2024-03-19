document.addEventListener('DOMContentLoaded', () => {
    const toggleSwitch = document.getElementById('toggle-switch');
    const toggleSwitchOn = document.getElementById('toggle-switch-on');
    const toggleSwitchOff = document.getElementById('toggle-switch-off');

    toggleSwitch.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
        toggleSwitchOn.classList.toggle('hidden');
        toggleSwitchOff.classList.toggle('hidden');
    });
});
