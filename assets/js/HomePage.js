class HomePage {
    constructor() {
        this.headerCalendarButton = document.querySelector("#header-calendar");
        this.headerCalContainer = document.querySelector("#header-cal-container");

        this.newsletterBtn = document.querySelector("#newsletter__btn");
        this.newsletterOverlay = document.querySelector("#close-newsletter-overlay");
        this.newsletterCloseBtn = document.querySelector("#close-newsletter-close-btn");
        this.events();
    } 
    events(){
        this.headerCalendarButton.addEventListener('click', () => {
            this.toggleShowingCal();
        });
        if(this.newsletterCloseBtn != null){
            this.newsletterCloseBtn.addEventListener('click', () => {
                this.closeNewsleterOveraly();
            });
        }
        if(this.newsletterBtn != null){
            this.newsletterBtn.addEventListener('click', () => {
                this.openNewsleterOveraly();
            })
        }

    }
    toggleShowingCal(){
        this.headerCalContainer.classList.toggle("calendar-wrapper--hide");
    }
    closeNewsleterOveraly(){
        this.newsletterOverlay.classList.add("newsletter-overlay--close");
    }
    openNewsleterOveraly(){
        this.newsletterOverlay.classList.remove("newsletter-overlay--close");
    }
};
export default HomePage;