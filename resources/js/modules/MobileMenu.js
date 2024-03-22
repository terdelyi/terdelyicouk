class MobileMenu {
    constructor(menu) {
        this.mobileMenu = menu;
    }

    toggle(onElement, offElement) {
        onElement.classList.toggle('hidden');
        offElement.classList.toggle('hidden');

        if (this.mobileMenu.classList.contains('hidden')) {
            this.mobileMenu.classList.replace('hidden', 'flex');
        } else {
            this.mobileMenu.classList.replace('flex', 'hidden');
        }
    }
}

export default MobileMenu;