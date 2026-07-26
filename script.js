const detailButtons = document.querySelectorAll(".detail-btn");

detailButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const targetId = button.getAttribute("aria-controls");
    const target = document.getElementById(targetId);
    const isOpen = button.getAttribute("aria-expanded") === "true";

    detailButtons.forEach((otherButton) => {
      const otherTarget = document.getElementById(
        otherButton.getAttribute("aria-controls"),
      );
      otherButton.setAttribute("aria-expanded", "false");
      otherTarget.classList.remove("is-open");
    });

    if (!isOpen) {
      button.setAttribute("aria-expanded", "true");
      target.classList.add("is-open");
    }
  });
});

const hamburger = document.querySelector(".header__hamburger");
const navLinks = document.querySelector(".header__nav-links");
const overlay = document.querySelector(".header__overlay");

function closeMenu() {
  hamburger.setAttribute("aria-expanded", "false");
  hamburger.classList.remove("is-active");
  navLinks.classList.remove("is-open");
  overlay.classList.remove("is-open");
  document.body.classList.remove("is-menu-open");
}

function openMenu() {
  hamburger.setAttribute("aria-expanded", "true");
  hamburger.classList.add("is-active");
  navLinks.classList.add("is-open");
  overlay.classList.add("is-open");
  document.body.classList.add("is-menu-open");
}

hamburger.addEventListener("click", () => {
  const isOpen = hamburger.getAttribute("aria-expanded") === "true";
  isOpen ? closeMenu() : openMenu();
});

overlay.addEventListener("click", closeMenu);

navLinks.querySelectorAll(".header__nav-link").forEach((link) => {
  link.addEventListener("click", closeMenu);
});

const fadeTargets = document.querySelectorAll(".js-fade-in");

if (fadeTargets.length) {
  const fadeObserver = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          obs.unobserve(entry.target); // 一度表示したら監視終了（重くしない）
        }
      });
    },
    { threshold: 0.15 }, // 要素が15%見えたら発火
  );

  fadeTargets.forEach((target) => fadeObserver.observe(target));
}

const backToTop = document.querySelector(".back-to-top");

if (backToTop) {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 400) {
      backToTop.classList.add("is-visible");
    } else {
      backToTop.classList.remove("is-visible");
    }
  });

  backToTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}
