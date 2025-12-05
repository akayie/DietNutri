// Example: Back to top button
document.addEventListener("DOMContentLoaded", function () {
  const backBtn = document.createElement("button");
  backBtn.innerText = "↑";
  backBtn.className = "back-btn";
  document.body.appendChild(backBtn);

  backBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  window.addEventListener("scroll", () => {
    backBtn.style.display = window.scrollY > 300 ? "block" : "none";
  });
});

// small script for mobile nav toggle and dropdown touch behavior
document.addEventListener('DOMContentLoaded', function () {
  const navToggle = document.getElementById('nav-toggle');
  const navLinks = document.querySelector('.nav-links');
  const dropdowns = document.querySelectorAll('.nav-links .dropdown');

  if (navToggle && navLinks) {
    navToggle.addEventListener('click', function () {
      navLinks.classList.toggle('active');
    });
  }

  // make dropdowns click-to-open on touch devices
  dropdowns.forEach(function (dd) {
    const link = dd.querySelector('a');
    link.addEventListener('click', function (e) {
      // on small screens, toggle submenu instead of following link
      if (window.innerWidth <= 860) {
        e.preventDefault();
        const submenu = dd.querySelector('.dropdown-content');
        if (submenu) submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
      }
    });
  });

  // back to top button: create only if not present
  if (!document.querySelector('.back-btn')) {
    const b = document.createElement('button');
    b.className = 'back-btn';
    b.type = 'button';
    b.title = 'Back to top';
    b.innerText = '↑';
    b.style.display = 'none';
    document.body.appendChild(b);
    b.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    window.addEventListener('scroll', () => {
      b.style.display = window.scrollY > 300 ? 'block' : 'none';
    });
  }
});
document.addEventListener("DOMContentLoaded", function() {
    // meal containers တွေကို select
    const mealContainers = document.querySelectorAll(".breakfast-container, .lunch-container, .dinner-container");

    mealContainers.forEach(container => {
        const meals = container.querySelectorAll(".section-title");
        let currentIndex = 0;

        // Initially first meal ကိုသာပြ
        meals.forEach((meal, index) => {
            if (index !== 0) meal.style.display = "none";
        });

        // btn-choose button handle
        container.querySelectorAll(".btn-choose").forEach((btn, index) => {
            btn.addEventListener("click", function(e) {
                e.preventDefault(); // form submit block
                // current meal hide
                meals[index].style.display = "none";

                // next meal show
                if (index + 1 < meals.length) {
                    meals[index + 1].style.display = "block";
                }
            });
        });
    });
});