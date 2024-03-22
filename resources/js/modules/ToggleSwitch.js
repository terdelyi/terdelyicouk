import hljs from "highlight.js/lib/core";

class ToggleSwitch {
    constructor(switchOn, switchOff) {
        this.toggleSwitchOn = switchOn;
        this.toggleSwitchOff = switchOff;
    }

    toggle() {
        document.documentElement.classList.toggle('dark');

        this.toggleSwitchOn.classList.toggle('hidden');
        this.toggleSwitchOff.classList.toggle('hidden');

        if (document.documentElement.classList.contains('dark')) {
            this.switchStyle('Dark theme', 'Light theme');
        } else {
            this.switchStyle('Light theme', 'Dark theme');
        }

        hljs.highlightAll();
    }

    switchStyle(currentStyle, styleToSwitch) {
        document.querySelector(`link[title="${currentStyle}"]`).removeAttribute("disabled");
        document.querySelector(`link[title="${styleToSwitch}"]`).setAttribute("disabled", "disabled");
    }
}

export default ToggleSwitch;