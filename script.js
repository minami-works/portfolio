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
