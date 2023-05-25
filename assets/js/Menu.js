/*
Menu:
1. Burger (as container), burger_middle the middle line and mobile menu div selected.
2. Events method called (which includes click event listener and calls toggle menu method).
3. Toggle menu adds/removes CSS classes.
4. Search icon closes/opens search input
*/
class Menu {
    constructor() {
        this.mobileMenuDiv = document.querySelector("#burger");
        this.mobileMenuIcon = document.querySelector("#burger__middle");
        this.mobileMenuClose = document.querySelector("#mobile-menu");
        this.headerSearchIcon = document.querySelector(".header__search-icon svg");
        this.headerSearchInput = document.querySelector(".header__main-search")
        this.events();
    }

    events(){
        this.mobileMenuDiv.addEventListener('click', () => {
            this.toggleMenu();
        });
        this.headerSearchIcon.addEventListener('click', () => {
            this.toggleSearchInput();
        });
    }
    toggleMenu(){
        this.mobileMenuIcon.classList.toggle("header__burger__middle--active");
        this.mobileMenuClose.classList.toggle("mobile-menu--close");
        this.mobileMenuIcon.classList.toggle("header__burger__middle--open");
    }
    toggleSearchInput(){
        this.headerSearchInput.classList.toggle("header__main-search--open");
    }
}

export default Menu;