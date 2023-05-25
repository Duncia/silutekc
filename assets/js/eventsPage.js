//DOM selections
const everyEventItem = document.querySelectorAll(".hp-gallery__item");
const everyOptionItem = document.querySelectorAll(".events-filter__option");

const filterShows = document.querySelector("#shows");
const filterEducations = document.querySelector("#educations");
const filterConcerts = document.querySelector("#concerts");
const filterMovies = document.querySelector("#movies");
const filterKids = document.querySelector("#kids");
const filterAll = document.querySelector("#all");

//Functions
function hideNotSelectedEvents(selectedEv = ""){
    everyEventItem.forEach(ev => {
        if(ev.classList.contains("hide-event")){
            ev.classList.remove("hide-event");
        }
        if(!ev.classList.contains(selectedEv)){
            ev.classList.add("hide-event");
        }
    });
};
function showAllEvents(){
    everyEventItem.forEach(ev => {
        if(ev.classList.contains("hide-event")){
            ev.classList.remove("hide-event");
        }
    });
    everyOptionItem.forEach(el => {
        if(el.classList.contains("events-filter__option--active")){
            el.classList.remove("events-filter__option--active");
        }
    });
}

//Events
filterShows.addEventListener('click', () => {
    if(filterShows.classList.contains("events-filter__option--active")){
        filterShows.classList.remove("events-filter__option--active");
        showAllEvents();
    } else {
        hideNotSelectedEvents("spektaklis");
        everyOptionItem.forEach(el => {
            if(el.classList.contains("events-filter__option--active")){
                el.classList.remove("events-filter__option--active");
            }
        });
        filterShows.classList.add("events-filter__option--active");
    }

});
filterEducations.addEventListener('click', () => {
    if(filterEducations.classList.contains("events-filter__option--active")){
        filterEducations.classList.remove("events-filter__option--active");
        showAllEvents();
    } else {
        hideNotSelectedEvents("edukacija");
        everyOptionItem.forEach(el => {
            if(el.classList.contains("events-filter__option--active")){
                el.classList.remove("events-filter__option--active");
            }
        });
        filterEducations.classList.add("events-filter__option--active");
    }

});
filterConcerts.addEventListener('click', () => {
    if(filterConcerts.classList.contains("events-filter__option--active")){
        filterConcerts.classList.remove("events-filter__option--active");
        showAllEvents();
    } else {
        hideNotSelectedEvents("koncertai");
        everyOptionItem.forEach(el => {
            if(el.classList.contains("events-filter__option--active")){
                el.classList.remove("events-filter__option--active");
            }
        });
        filterConcerts.classList.add("events-filter__option--active");
    }

});
filterMovies.addEventListener('click', () => {
    if(filterMovies.classList.contains("events-filter__option--active")){
        filterMovies.classList.remove("events-filter__option--active");
        showAllEvents();
    } else {
        hideNotSelectedEvents("kinas");
        everyOptionItem.forEach(el => {
            if(el.classList.contains("events-filter__option--active")){
                el.classList.remove("events-filter__option--active");
            }
        });
        filterMovies.classList.add("events-filter__option--active");
    }

});
filterKids.addEventListener('click', () => {
    if(filterKids.classList.contains("events-filter__option--active")){
        filterKids.classList.remove("events-filter__option--active");
        showAllEvents();
    } else {
        hideNotSelectedEvents("vaikams");
        everyOptionItem.forEach(el => {
            if(el.classList.contains("events-filter__option--active")){
                el.classList.remove("events-filter__option--active");
            }
        });
        filterKids.classList.add("events-filter__option--active");
    }

});
filterAll.addEventListener('click', () => {
    showAllEvents();
})