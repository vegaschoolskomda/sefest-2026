const accordionItems = Array.from(
    document.querySelectorAll("[data-accordion-item]")
);

const setActiveItem = (target) => {
    accordionItems.forEach((item) => item.classList.remove("active"));
    if (target) {
        target.classList.add("active");
    }
};

accordionItems.forEach((item) => {
    item.addEventListener("mouseenter", () => setActiveItem(item));
    item.addEventListener("focus", () => setActiveItem(item));
    item.addEventListener("click", () => setActiveItem(item));
});

if (accordionItems.length > 0) {
    setActiveItem(accordionItems[0]);
}
