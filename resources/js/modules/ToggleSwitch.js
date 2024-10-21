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
            localStorage.setItem('theme', 'dark');
        } else {
            this.switchStyle('Light theme', 'Dark theme');
            localStorage.setItem('theme', 'light');
        }

        hljs.highlightAll();
    }

    load() {
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
            this.toggleSwitchOn.classList.add('hidden');
            this.switchStyle('Dark theme', 'Light theme');
        } else {
            this.toggleSwitchOn.classList.remove('hidden');
            this.toggleSwitchOff.classList.add('hidden');
        }
    }

    switchStyle(currentStyle, styleToSwitch) {
        document.querySelector(`link[title="${currentStyle}"]`).removeAttribute("disabled");
        document.querySelector(`link[title="${styleToSwitch}"]`).setAttribute("disabled", "disabled");
    }
}

export default ToggleSwitch;