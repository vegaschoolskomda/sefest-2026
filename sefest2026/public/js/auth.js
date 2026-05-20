document.addEventListener("DOMContentLoaded", () => {
    // Input Hover Effect
    const wrappers = document.querySelectorAll(".input-wrapper");
    wrappers.forEach((wrapper) => {
        wrapper.addEventListener("mousemove", (e) => {
            const rect = wrapper.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            wrapper.style.setProperty("--x", `${x}px`);
            wrapper.style.setProperty("--y", `${y}px`);
        });

        wrapper.addEventListener("mouseenter", () => wrapper.classList.add("active"));
        wrapper.addEventListener("mouseleave", () => wrapper.classList.remove("active"));
    });

    // Password Visibility
    const passToggles = document.querySelectorAll(".password-toggle");
    passToggles.forEach((btn) => {
        btn.addEventListener("click", () => {
            const input = btn.previousElementSibling;
            const type = input.getAttribute("type") === "password" ? "text" : "password";
            input.setAttribute("type", type);
            const icon = btn.querySelector("i");
            icon.classList.toggle("fa-eye");
            icon.classList.toggle("fa-eye-slash");
        });
    });

    // Box Reveal Animation
    const reveals = document.querySelectorAll(".box-reveal");
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, { threshold: 0.1 });

    reveals.forEach(r => observer.observe(r));

    // Form Navigation
    const forms = document.querySelectorAll("form");
    forms.forEach(form => {
        form.addEventListener("submit", (e) => {
            // Simple validation simulation
            const inputs = form.querySelectorAll("input[required]");
            let valid = true;
            inputs.forEach(input => {
                if (!input.value) {
                    valid = false;
                    input.style.borderColor = "red";
                } else {
                    input.style.borderColor = "";
                }
            });

            if (!valid) e.preventDefault();
        });
    });
});
