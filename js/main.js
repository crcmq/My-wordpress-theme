/**
 * Menu icon toggle 
 * @param {} x 
 */
 function menuIconToggle (x) {
    x.classList.toggle("change");
}

/**
 * When screen is scrolling, change navigation bar color and display backtotop button
 */
window.onscroll = function() {changeNavBackground(); loadBackToTopBtn();};

/**
 * When banner is disabled, it's shown as empty space
 */
let banner = document.getElementById("banner");
if (banner.classList.contains("inactive")) {
    banner.style.background = "none";
    banner.style.height = "72px";
    banner.style.marginBottom = "5px";
}
/**
 * When window is loaded, check banner's location to adjust navigation background
 */
let rect = banner.getBoundingClientRect();
    let bannerY_scroll = rect.y;
    if (!banner.classList.contains("inactive")) {
        if (bannerY_scroll < 0) {
            document.getElementById("top-menu").style.background = "#262626";
        }
        else {
            document.getElementById("top-menu").style.background = "transparent";
        }
    } 

/**
 * Change navigation bar background according to banner location
 */
function changeNavBackground() {
    let rect = banner.getBoundingClientRect();
    let bannerY_scroll = rect.y;
    if (!banner.classList.contains("inactive")) {
        if (bannerY_scroll < 0) {
            document.getElementById("top-menu").style.background = "#262626";
        }
        else {
            document.getElementById("top-menu").style.background = "transparent";
        }
    } 
}

/**
 * Load back to top button according to main location
 */
let main = document.getElementById("main");
let btn_backToTop = document.getElementById("back-to-top-icon");
btn_backToTop.addEventListener("click", function(){backToTop();});
function loadBackToTopBtn() {
    let rect = main.getBoundingClientRect();
    let main_y = rect.y;
    if (main_y < 80) {
        btn_backToTop.style.display = "block";
    }
    else {
        btn_backToTop.style.display = "none";
    }
}
function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/**
 * Show search bar when clicking search icon
 */
let searchIcon = document.getElementById("search-icon");
let searchBox = document.getElementById("search-box");
searchBox.style.top = "-72px";
searchIcon.addEventListener('click', function(){searchIconFunc();});

function searchIconFunc() {
    if(searchBox.style.top == "-72px") {
        searchBox.style.top = "80px";
    }
    else {
        searchBox.style.top = "-72px";
        
    }
}

/**
 * Display menu when clicking menu icon
 */
let topMenuIcon = document.getElementById("menu-icon");
let topMenu = document.getElementById("top-menu");
let slideMenu = document.getElementById("slide-out-menu");
slideMenu.style.height = "0%";
topMenuIcon.addEventListener('click', function() {displayTopMenu();})

function displayTopMenu() {
    if(slideMenu.style.height == "0%") {
        document.getElementById("top-menu").style.background = "#262626";
        slideMenu.style.height="100%";
    }
    else {
        if(banner.getBoundingClientRect().y == 0 && !banner.classList.contains("inactive")) {
            document.getElementById("top-menu").style.background = "transparent";
        }  
        slideMenu.style.height = "0%";
    }   
}

