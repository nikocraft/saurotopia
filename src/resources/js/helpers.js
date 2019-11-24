/** THEME JS HELPERS for use inside view files */

/**
 * Tab component helper function
 * Opens tabs when clicking on them
 * @param {} id 
 */
const openTab = (tabBlock, tabId) => {
    var tabNavs = (document.querySelectorAll('.'+tabBlock + ' .tabsbar .tab-item'));
    for (var i = 0; i < tabNavs.length; i++) {
        tabNavs[i].classList.remove('active-tab-item');
    }
    document.getElementById('tab-nav-'+tabId).classList.add('active-tab-item');
    var tabs = (document.querySelectorAll('.'+tabBlock + ' .tab-block'));
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active-tab');
    }
    document.getElementById(tabId).classList.add('active-tab');
}


/**
 * Hamburger button toggle
 * Opens the Hamburger Menu
 * @param {} id 
 */
const hamburgerToggle = (id) => {
    let hamburgerBtn = document.getElementById(id);
    let hamburgerMenu = document.getElementById('sidebar-content');

    // toggle hamburgerBtn
    toggleClass(hamburgerBtn, 'is-active');

    if(hasClass(hamburgerBtn, 'is-active')) {
        hamburgerMenu.style.display = 'block';
        hamburgerMenu.setAttribute('class', '');
        hamburgerMenu.setAttribute('class', 'animated ' + window.themeSettings.hamburgerMenu.inAnimation);
    } else {
        hamburgerMenu.setAttribute('class', '')
        window.setTimeout(function() {
            let hamburgerMenu = document.getElementById('sidebar-content');
            hamburgerMenu.setAttribute('class', 'animated ' + window.themeSettings.hamburgerMenu.outAnimation);
        }, 200);
        window.setTimeout(function() {
            let hamburgerMenu = document.getElementById('sidebar-content');
            hamburgerMenu.style.display = 'none';
        }, 950);
    }
}

/**
 * Hamburger dropdown button toggle
 * toggles between open and close buttons
 * called directly by dropDownMenuToggle function
 * @param {} id 
 */
const dropDownBtnToggle = (id) => {
    let dropDownBtn = document.getElementById(id);
    let menuItem = dropDownBtn.closest('.menu-item');
    let dropDown = menuItem.querySelector('.dropdown-content');

    let dropDownMenuVisible = window.getComputedStyle(dropDown, null).display;
    dropDown.style.display = (dropDownMenuVisible == 'none') ? 'block' : 'none';

    let dropDownBtnIcon = dropDown.style.display == 'none' ? 'fas fa-plus-circle' : 'fas fa-minus-circle';
    dropDownBtn.setAttribute('class', dropDownBtnIcon);
}

/**
 * Hamburger drop-down-menu toggle
 * Only for touch screens, on desktop screens css should be used to toggle visibility
 * @param {} id 
 */
const dropDownMenuToggle = (id) => {
    let dropDownMenu = document.getElementById(id);
    let menuItem = dropDownMenu.closest('.menu-item');
    let dropDownContent = menuItem.querySelector('i');

    dropDownBtnToggle(dropDownContent.id);
}

/** Functions to be exported for use in themes directly */
export {
    openTab, hamburgerToggle, dropDownMenuToggle
}


// HELPER Functions

/** 
 * Check if element has a class
 */
const hasClass = (el, className) => {
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

/** 
 * Toggle an element's class
 */
const toggleClass = (element, classToToggle) => {
    if (element.classList) {
        element.classList.toggle(classToToggle);
    } else { // For IE9
        var classes = element.className.split(" ");
        var i = classes.indexOf(classToToggle);
      
        if (i >= 0)
          classes.splice(i, 1);
        else
          classes.push(classToToggle);
          element.className = classes.join(" ");
    }
}