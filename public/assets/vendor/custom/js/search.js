const searchInput = document.querySelector(".search");
const wrapSearch = document.querySelector(".wrap-search");

searchInput.addEventListener("focus", () => {
    wrapSearch.classList.add("active");
});

searchInput.addEventListener("blur", () => {
    if (searchInput.value === "") {
        wrapSearch.classList.remove("active");
    }
});
