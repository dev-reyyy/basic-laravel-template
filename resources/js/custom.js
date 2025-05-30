document.addEventListener("DOMContentLoaded", function () {
    // Adds required class to labels
    document.querySelectorAll("label").forEach((label) => {
        const input = document.querySelector(`#${label.getAttribute("for")}`);
        if (input && input.hasAttribute("required")) {
            label.classList.add("required");
        }
    });
});
