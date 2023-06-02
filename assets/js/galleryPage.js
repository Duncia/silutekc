//DOM selections
const everyGalleryItem = document.querySelectorAll(".skc-gallery__item");
const everyGalOptionItem = document.querySelectorAll(".gallery-year-tab");

//Functions
function hideNotClickedGallery(){
    everyGalleryItem.forEach(gal =>{
        console.log(gal)
    })
}

//Events
everyGalOptionItem.forEach(gaItem => {
    gaItem.addEventListener('click', () => {
        everyGalOptionItem.forEach(galIt2 => {
            if(galIt2.classList.contains("gallery-year-tab--active")){
                galIt2.classList.remove("gallery-year-tab--active");
            }
        })
        console.log(gaItem.dataset.galyear);
        everyGalleryItem.forEach(gal =>{
            gal.classList.add("gallery-year-tab-hide");
            
            if(gaItem.dataset.galyear == gal.dataset.galyear){
                gal.classList.remove("gallery-year-tab-hide");
                gaItem.classList.toggle("gallery-year-tab--active");
            };
            if(gaItem.dataset.galyear == "all-years"){
                gal.classList.remove("gallery-year-tab-hide");
                gaItem.classList.add("gallery-year-tab--active");
            };
        })
    })
})