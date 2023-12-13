/**
 * Collapse function
 */
function addDropdownToggleClass() {
    var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var menuElements = document.getElementsByClassName('collapse-list');
    var dropdownMenus = document.getElementsByClassName('dropdown-list');

    // Check if the elements exist
    if (menuElements.length > 0) {
        // Iterate through each element
        for (var i = 0; i < menuElements.length; i++) {
            var menuElement = menuElements[i];
            var dropdownMenu = dropdownMenus[i];

            // Check if the screen width is 400 pixels or less
            if (screenWidth <= 767) {
                // Add the "dropdown-toggle" class
                menuElement.classList.add('collapse');
                dropdownMenu.classList.add('dropdown-toggle');
                dropdownMenu.setAttribute('data-bs-toggle', 'collapse');
                dropdownMenu.setAttribute('type', 'button');
            } else {
                // Remove the "collapse" class if screen width is greater than 400 pixels
                menuElement.classList.remove('collapse');
                dropdownMenu.classList.remove('dropdown-toggle');
                dropdownMenu.removeAttribute('data-bs-toggle');
                dropdownMenu.removeAttribute('type');
            }
        }
    }
}

// Add the class on page load
addDropdownToggleClass();

// Add event listener to check and add/remove the class on window resize
window.addEventListener('resize', addDropdownToggleClass);

/**
 * Count Function
 */

function countUp(targetElement, start, end, duration) {
    const range = end - start;
    const step = Math.ceil(duration / range);

    function updateCount(count) {
        targetElement.textContent = count;
    }

    function animateCount(current, count) {
        setTimeout(() => {
            current += 2;
            updateCount(current);

            if (current < count) {
                animateCount(current, count);
            }
        }, step);
    }

    animateCount(start, end);
}

function startCounting(entries, observer) {
    if (entries[0].isIntersecting) {
        countUp(document.getElementById("teachersCount"), 0, 20, 500);
        countUp(document.getElementById("adminCount"), 0, 5, 500);
        countUp(document.getElementById("sectorsCount"), 0, 10, 500);
        countUp(document.getElementById("studentsCount"), 0, 500, 500);
        observer.unobserve(entries[0].target);
    }
}

const observer = new IntersectionObserver(startCounting, { threshold: 0.5 });

const countSection = document.getElementById("countSection");
observer.observe(countSection);