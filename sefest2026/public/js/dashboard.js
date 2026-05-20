document.addEventListener("DOMContentLoaded", () => {
    // Sidebar Toggle
    const sidebar = document.getElementById("sidebar");
    const toggleBtn = document.getElementById("sidebar-toggle");
    
    if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("collapsed");
            const icon = toggleBtn.querySelector("i");
            if (sidebar.classList.contains("collapsed")) {
                icon.setAttribute("data-lucide", "chevrons-right");
            } else {
                icon.setAttribute("data-lucide", "chevrons-left");
            }
            lucide.createIcons();
        });
    }

    // Theme Toggle
    const themeBtn = document.getElementById("theme-toggle");
    themeBtn.addEventListener("click", () => {
        document.documentElement.classList.toggle("dark");
        const icon = themeBtn.querySelector("i");
        if (document.documentElement.classList.contains("dark")) {
            icon.setAttribute("data-lucide", "sun");
        } else {
            icon.setAttribute("data-lucide", "moon");
        }
        lucide.createIcons();
    });

    // Navigation Active State
    const navItems = document.querySelectorAll(".nav-item");
    navItems.forEach(item => {
        item.addEventListener("click", (e) => {
            navItems.forEach(i => i.classList.remove("active"));
            item.classList.add("active");
            
            // Simulation of changing view
            const title = item.querySelector(".nav-text")?.textContent || "Dashboard";
            document.getElementById("main-title").textContent = title;
        });
    });
});
