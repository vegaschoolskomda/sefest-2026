<style>
    .footer-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 0;
    }
    .footer-wrapper {
        display: flex;
        align-items: center;
        border-radius: 9999px;
        border: 1px dotted var(--dashboard-border);
        padding: 4px;
        background: var(--dashboard-card);
    }
    .footer-btn {
        background: none;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
        padding: 8px;
        border-radius: 9999px;
    }
    .btn-sun {
        background-color: #000;
        color: #fff;
        margin-right: 12px;
    }
    .dark .btn-sun {
        background-color: var(--dashboard-bg);
    }
    .btn-moon {
        color: #000;
        margin-left: 12px;
    }
    .dark .btn-moon {
        background-color: #000;
        color: #fff;
    }
    .btn-top {
        color: var(--dashboard-text-muted);
    }
    .btn-top:hover {
        color: var(--dashboard-text);
    }
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }
</style>

<footer class="footer-container">
    <div class="footer-wrapper">
        <button
            id="footer-set-light"
            class="footer-btn btn-sun"
            title="Light Mode"
        >
            <i data-lucide="sun" style="width: 20px; height: 20px;" stroke-width="1"></i>
            <span class="sr-only">T</span>
        </button>

        <button 
            type="button" 
            id="footer-scroll-top"
            class="footer-btn btn-top"
            title="Scroll to Top"
        >
            <i data-lucide="arrow-up" style="width: 12px; height: 12px;"></i>
            <span class="sr-only">Top</span>
        </button>

        <button
            id="footer-set-dark"
            class="footer-btn btn-moon"
            title="Dark Mode"
        >
            <i data-lucide="moon" style="width: 20px; height: 20px;" stroke-width="1"></i>
            <span class="sr-only">T</span>
        </button>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const setLight = document.getElementById('footer-set-light');
        const setDark = document.getElementById('footer-set-dark');
        const scrollTop = document.getElementById('footer-scroll-top');

        if (setLight) {
            setLight.addEventListener('click', () => {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                updateThemeIcons();
            });
        }

        if (setDark) {
            setDark.addEventListener('click', () => {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                updateThemeIcons();
            });
        }

        if (scrollTop) {
            scrollTop.addEventListener('click', () => {
                window.scroll({
                    top: 0,
                    behavior: "smooth",
                });
            });
        }

        function updateThemeIcons() {
            // Update the header theme toggle icon as well if it exists
            const headerThemeBtn = document.getElementById("theme-toggle");
            if (headerThemeBtn) {
                const icon = headerThemeBtn.querySelector("i");
                if (document.documentElement.classList.contains("dark")) {
                    icon.setAttribute("data-lucide", "sun");
                } else {
                    icon.setAttribute("data-lucide", "moon");
                }
            }
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        }
    });
</script>
