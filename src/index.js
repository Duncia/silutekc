//Importing main SCSS file.
import "../assets/scss/main.scss"

//Modules and classes
import Menu from "../assets/js/Menu";
import HomePage from "../assets/js/HomePage";

//Instantiate new object using modules and classes
const menu = new Menu();
const homePage = new HomePage();

/*
--------------Home page slider-----------
*/
let slides;
let dotContainer;
if(document.querySelectorAll('.slide') !== null){
  slides = document.querySelectorAll('.slide');
}
if(document.querySelector('.dots') !== null){
  dotContainer = document.querySelector('.dots');
}
let curSlide = 0;
const maxSlide = slides.length;
if(slides.length !== 0 || dotContainer !== undefined){
  //Functions for slides - translateX value changed by calculation
  const gotToSlide = function(slide){
    slides.forEach((s, i) => s.style.transform = `translateX(${100 * (i-slide)}%)`);
  }
  //First function call
  gotToSlide(0);
  //Next ir previous slides functions
  const nextSlide = function(){
    if(curSlide === maxSlide - 1){
      curSlide = 0;
    } else {
      curSlide++;
    }
    gotToSlide(curSlide);
    activateDot(curSlide);
  };
  setInterval(nextSlide, 4000);
  const prevSlide = function(){
    if(curSlide === 0){
      curSlide = maxSlide -1;
    } else {
      curSlide--;
    }
    gotToSlide(curSlide);
    activateDot(curSlide);
  }
  //Dots
  const createDots = function(){
    slides.forEach(function(_, i){
      dotContainer.insertAdjacentHTML('beforeend', `<button class="dots__dot" data-slide="${i}"></button>`);
    });
  };
  createDots();
  const activateDot = function(slide){
    if(document.querySelectorAll('.dots__dot') !== null){
      document.querySelectorAll('.dots__dot').forEach(dot => dot.classList.remove('dots__dot--active'));
    }
    if(document.querySelector(`.dots__dot[data-slide="${slide}"]`) !== null){
      document.querySelector(`.dots__dot[data-slide="${slide}"]`).classList.add('dots__dot--active');
    }
  };
  activateDot(curSlide);
  dotContainer.addEventListener('click', function(e){
    if(e.target.classList.contains('dots__dot')){
      const {slide} = e.target.dataset;
      gotToSlide(slide);
      activateDot(slide);
    }
  });
}

/*
------------Header calendar-------------
*/
const wpBaseUrl = document.location.origin;
const wpAllEventsUrl = wpBaseUrl +'/wp-json/wp/v2/events?_embed';
let eventsDataArr;
async function fetchEvents(){
  const response = await fetch(wpAllEventsUrl);
  const eventsData = await response.json();
  return eventsData;
}
fetchEvents()
  .then(eventsData => {
    return eventsDataArr = eventsData;
  })
  .then(() => {
    //console.log(eventsDataArr);
    const daysTag = document.querySelector(".days");
    const currentDate = document.querySelector(".current-date");
    const prevNextIcon = document.querySelectorAll(".icons span");
    const calendarEventsPreview = document.querySelector(".calendar-events-preview");

    //Getting new date, current year and month
    let date = new Date();
    let currYear = date.getFullYear();
    let currMonth = date.getMonth();

    //Storing full name of all months in array
    const months = ["Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis", "Liepa",
                  "Rugpjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis"];

    const renderCalendar = () => {
        let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(); // getting first day of month
        let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(); // getting last date of month
        let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(); // getting last day of month
        let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
        let liTag = "";

        for (let i = firstDayofMonth; i > 1; i--) { // creating li of previous month last days
            liTag += `<li class="singleDay inactive">${lastDateofLastMonth - i + 1}</li>`;
        }

        for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
            let aggrMonth = currMonth < 10 ? "0"+(currMonth+1) : currMonth+1;
            let aggrDay = i < 10 ? "0"+i : i;
            let aggrFullDate = currYear +""+ aggrMonth +""+ aggrDay;

            let hasEvents = "";
            for(let l = 0; l < eventsDataArr.length; l++){
              if(eventsDataArr[l].acf.event_date == aggrFullDate){
                hasEvents = eventsDataArr[l].acf.event_date == aggrFullDate ? "hasEvents" : "";
              }
            }
            
            // adding active class to li if the current day, month, and year matched
            let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                        && currYear === new Date().getFullYear() ? "active" : "";
            liTag += `<li class="singleDay ${isToday} ${hasEvents}" data-date="${aggrFullDate}">${i}</li>`;
        }

        for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
            liTag += `<li class="singleDay inactive">${i - lastDayofMonth + 1}</li>`
        }
        currentDate.innerHTML = `<p class="current-date__month">${months[currMonth]}</p> <p class="current-date__year">${currYear}</p>`; // passing current mon and yr as currentDate text
        daysTag.innerHTML = liTag;

        const everyDaysLi = document.querySelectorAll(".singleDay");

        everyDaysLi.forEach((liItem) => {
          liItem.addEventListener('click', () => {
            calendarEventsPreview.innerHTML = "";
            if(liItem.classList.contains("hasEvents")){
              for(let n = 0; n < eventsDataArr.length; n++){
                if(eventsDataArr[n].acf.event_date == liItem.dataset.date){
                  calendarEventsPreview.insertAdjacentHTML('beforeend', `<div class="calendar-events-preview-block">
                  <div class="calendar-events-preview__img">
                    <a href="${eventsDataArr[n].link}">
                      <img src="${eventsDataArr[n]._embedded['wp:featuredmedia']['0'].source_url}" />
                    </a>
                  </div>
                  <div class="calendar-events-preview__content">
                    <p>${eventsDataArr[n]._embedded['wp:term']['0']['0'].name}</p>
                    <h4>${eventsDataArr[n].acf.events_single_title_top}</h4>
                    <a href="${eventsDataArr[n].link}"><p>Plačiau</p></a>
                  </div></div>
                  `);
                  /*
                  calendarEventsPreview.innerHTML = `
                  <div class="calendar-events-preview__img">
                    <a href="${eventsDataArr[n].link}">
                      <img src="${eventsDataArr[n]._embedded['wp:featuredmedia']['0'].source_url}" />
                    </a>
                  </div>
                  <div class="calendar-events-preview__content">
                    <p>${eventsDataArr[n]._embedded['wp:term']['0']['0'].name}</p>
                    <h4>${eventsDataArr[n].acf.events_single_title_top}</h4>
                    <a href="${eventsDataArr[n].link}"><p>Plačiau</p></a>
                  </div>
                  `;
                  */
                  
                }
              }
            } else {
              calendarEventsPreview.innerHTML = "";
            }
            
          })
        });
    }
    renderCalendar();

    prevNextIcon.forEach(icon => { // getting prev and next icons
        icon.addEventListener("click", () => { // adding click event on both icons
            // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
            currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

            if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
                // creating a new date of current year & month and pass it as date value
                date = new Date(currYear, currMonth, new Date().getDate());
                currYear = date.getFullYear(); // updating current year with new date year
                currMonth = date.getMonth(); // updating current month with new date month
            } else {
                date = new Date(); // pass the current date as date value
            }
            renderCalendar(); // calling renderCalendar function
        });
    });
  });
