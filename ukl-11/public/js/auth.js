/* ================================================
   SIJA AUTHENTICATION - JAVASCRIPT
   Modern SaaS Style Authentication Logic
   ================================================ */

(function() {
    'use strict';

    // ========== PASSWORD VISIBILITY TOGGLE ==========
    function initPasswordToggle() {
        const toggleButtons = document.querySelectorAll('.password-toggle');

        toggleButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                const eyeIcon = this.querySelector('.eye-icon');
                const eyeOffIcon = this.querySelector('.eye-off-icon');

                if (!input) return;

                // Toggle input type
                const isPassword = input.type === 'password';
                input.type = isPassword ? 'text' : 'password';

                // Toggle icons
                if (isPassword) {
                    eyeIcon.style.display = 'none';
                    eyeOffIcon.style.display = 'block';
                } else {
                    eyeIcon.style.display = 'block';
                    eyeOffIcon.style.display = 'none';
                }

                // Add animation
                this.classList.add('toggle-active');
                setTimeout(() => this.classList.remove('toggle-active'), 200);
            });
        });
    }

    // ========== FORM VALIDATION ==========
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validatePassword(password) {
        // At least 8 characters
        return password.length >= 8;
    }

    function validatePasswordMatch(password, confirmation) {
        return password === confirmation;
    }

    function validateForm(formType) {
        const form = document.getElementById(formType === 'login' ? 'loginForm' : 'registerForm');
        if (!form) return true;

        const inputs = form.querySelectorAll('.form-input');
        let isValid = true;

        inputs.forEach(input => {
            let valid = true;

            // Email validation
            if (input.type === 'email') {
                valid = validateEmail(input.value);
                if (!valid) {
                    showInputError(input, 'Email tidak valid');
                }
            }

            // Password validation (for register)
            if (input.name === 'password' && formType === 'register') {
                if (!validatePassword(input.value)) {
                    showInputError(input, 'Password minimal 8 karakter');
                    valid = false;
                }
            }

            // Required field validation
            if (input.required && input.value.trim() === '') {
                showInputError(input, 'Field ini wajib diisi');
                valid = false;
            }

            if (valid) {
                removeInputError(input);
            } else {
                isValid = false;
            }
        });

        return isValid;
    }

    function showInputError(input, message) {
        input.classList.add('input-error');
        let errorElement = input.parentElement.querySelector('.form-error');

        if (!errorElement) {
            errorElement = document.createElement('span');
            errorElement.className = 'form-error';
            input.parentElement.appendChild(errorElement);
        }

        errorElement.textContent = message;
    }

    function removeInputError(input) {
        input.classList.remove('input-error');
        const errorElement = input.parentElement.querySelector('.form-error');
        if (errorElement && !errorElement.textContent.includes('dari server')) {
            errorElement.remove();
        }
    }

    // ========== REAL-TIME VALIDATION ==========
    function initRealTimeValidation() {
        const emailInputs = document.querySelectorAll('input[type="email"]');
        const passwordInputs = document.querySelectorAll('input[type="password"]');

        emailInputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value && !validateEmail(this.value)) {
                    showInputError(this, 'Email tidak valid');
                } else {
                    removeInputError(this);
                }
            });

            input.addEventListener('focus', function() {
                removeInputError(this);
            });
        });

        passwordInputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (input.name === 'password' && this.value && !validatePassword(this.value)) {
                    showInputError(this, 'Password minimal 8 karakter');
                } else {
                    removeInputError(this);
                }
            });

            input.addEventListener('focus', function() {
                removeInputError(this);
            });
        });
    }

    // ========== FORM SUBMISSION HANDLERS ==========
    function initFormHandlers() {
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        if (loginForm) {
            loginForm.addEventListener('submit', function(e) {
                // Validation is optional - form will be submitted to Laravel
                // Laravel will handle server-side validation
            });
        }

        if (registerForm) {
            registerForm.addEventListener('submit', function(e) {
                const password = document.getElementById('password').value;
                const confirmation = document.getElementById('password_confirmation').value;

                if (password !== confirmation) {
                    e.preventDefault();
                    showInputError(
                        document.getElementById('password_confirmation'),
                        'Password dan Konfirmasi Password tidak cocok'
                    );
                }
            });
        }
    }

    // ========== REMEMBER ME PERSISTENCE ==========
    function initRememberMe() {
        const emailInput = document.getElementById('email');
        const rememberCheckbox = document.querySelector('input[name="remember"]');

        // Load saved email
        if (emailInput && rememberCheckbox) {
            const savedEmail = localStorage.getItem('sija_saved_email');
            if (savedEmail) {
                emailInput.value = savedEmail;
                rememberCheckbox.checked = true;
            }

            // Save email on form submit
            const form = document.getElementById('loginForm');
            if (form) {
                form.addEventListener('submit', function() {
                    if (rememberCheckbox.checked) {
                        localStorage.setItem('sija_saved_email', emailInput.value);
                    } else {
                        localStorage.removeItem('sija_saved_email');
                    }
                });
            }
        }
    }

    // ========== INPUT FOCUS STYLING ==========
    function initInputFocusEffects() {
        const inputs = document.querySelectorAll('.form-input');

        inputs.forEach(input => {
            // Add focus class
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('input-focused');
            });

            // Remove focus class
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('input-focused');
            });

            // Add has-value class
            input.addEventListener('input', function() {
                if (this.value) {
                    this.parentElement.classList.add('input-has-value');
                } else {
                    this.parentElement.classList.remove('input-has-value');
                }
            });

            // Initialize has-value class if input already has value (e.g., old form data)
            if (input.value) {
                input.parentElement.classList.add('input-has-value');
            }
        });
    }

    // ========== ACCESSIBILITY IMPROVEMENTS ==========
    function initAccessibility() {
        // Keyboard navigation for buttons
        const buttons = document.querySelectorAll('button, a.btn');

        buttons.forEach(button => {
            button.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });

        // Focus management
        const firstInput = document.querySelector('.form-input');
        if (firstInput) {
            // Delay focus to ensure page is fully loaded
            setTimeout(() => {
                firstInput.focus();
            }, 300);
        }
    }

    // ========== LOADING STATE ==========
    function setFormLoading(formId, isLoading) {
        const form = document.getElementById(formId);
        if (!form) return;

        const submitBtn = form.querySelector('button[type="submit"]');
        if (!submitBtn) return;

        if (isLoading) {
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.7';
            submitBtn.innerHTML = `
                <span class="loading-spinner"></span>
                Memproses...
            `;
        } else {
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';
            submitBtn.innerHTML = submitBtn.getAttribute('data-original-text') || 'Masuk';
        }
    }

    // ========== ANIMATION TRIGGERS ==========
    function initAnimations() {
        // Add animation classes to elements
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe feature cards
        document.querySelectorAll('.feature-card').forEach(card => {
            observer.observe(card);
        });
    }

    // ========== ERROR MESSAGE HANDLING ==========
    function initErrorHandling() {
        const errorMessages = document.querySelectorAll('.form-error');

        errorMessages.forEach(message => {
            // Auto-remove error after 5 seconds if not user interaction
            if (!message.textContent.includes('dari server')) {
                setTimeout(() => {
                    if (message.parentElement) {
                        message.style.opacity = '0';
                        message.style.transition = 'opacity 0.3s ease';
                    }
                }, 5000);
            }
        });
    }

    // ========== PREVENT FORM RESUBMISSION ==========
    function initFormResubmissionPrevention() {
        const forms = document.querySelectorAll('form');

        forms.forEach(form => {
            form.addEventListener('submit', function() {
                // Store original button text
                const submitBtn = this.querySelector('button[type="submit"]');
                if (submitBtn && !submitBtn.hasAttribute('data-original-text')) {
                    submitBtn.setAttribute('data-original-text', submitBtn.innerHTML);
                }

                // Disable form submission briefly
                setTimeout(() => {
                    const inputs = this.querySelectorAll('input');
                    inputs.forEach(input => {
                        input.disabled = true;
                    });

                    // Re-enable after 5 seconds (should be redirected by then)
                    setTimeout(() => {
                        inputs.forEach(input => {
                            input.disabled = false;
                        });
                    }, 5000);
                }, 100);
            });
        });
    }

    // ========== INITIALIZATION ==========
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize all components
        initPasswordToggle();
        initRealTimeValidation();
        initFormHandlers();
        initRememberMe();
        initInputFocusEffects();
        initAccessibility();
        initAnimations();
        initErrorHandling();
        initFormResubmissionPrevention();

        // Add loading animation styles dynamically
        const style = document.createElement('style');
        style.textContent = `
            @keyframes spin {
                to { transform: rotate(360deg); }
            }

            .loading-spinner {
                display: inline-block;
                width: 16px;
                height: 16px;
                border: 2px solid rgba(255, 255, 255, 0.3);
                border-top-color: white;
                border-radius: 50%;
                animation: spin 0.8s linear infinite;
                margin-right: 8px;
            }

            .input-focused {
                transform: scale(1.01);
            }

            .toggle-active {
                transform: scale(1.1);
            }
        `;
        document.head.appendChild(style);

        // Log initialization
        console.log('SIJA Authentication initialized successfully');
    });

    // ========== UTILITY FUNCTIONS ==========

    /**
     * Get form data as object
     */
    window.getFormData = function(formId) {
        const form = document.getElementById(formId);
        if (!form) return null;

        const formData = new FormData(form);
        const data = {};

        formData.forEach((value, key) => {
            data[key] = value;
        });

        return data;
    };

    /**
     * Reset form
     */
    window.resetAuthForm = function(formId) {
        const form = document.getElementById(formId);
        if (!form) return;

        form.reset();

        // Remove all error messages
        const errorMessages = form.querySelectorAll('.form-error');
        errorMessages.forEach(msg => msg.remove());

        // Remove error classes
        const inputs = form.querySelectorAll('.form-input');
        inputs.forEach(input => input.classList.remove('input-error'));
    };

    /**
     * Show global message
     */
    window.showMessage = function(message, type = 'info') {
        const messageEl = document.createElement('div');
        messageEl.className = `global-message message-${type}`;
        messageEl.textContent = message;
        messageEl.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 16px 24px;
            background: ${type === 'error' ? '#EF4444' : type === 'success' ? '#10B981' : '#2563EB'};
            color: white;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            font-size: 14px;
            font-weight: 500;
            animation: slideInDown 0.3s ease-out;
            z-index: 9999;
        `;

        document.body.appendChild(messageEl);

        // Auto remove after 5 seconds
        setTimeout(() => {
            messageEl.style.animation = 'slideOutUp 0.3s ease-out';
            setTimeout(() => messageEl.remove(), 300);
        }, 5000);
    };

    /**
     * Validate entire form
     */
    window.validateFormData = function(formId) {
        return validateForm(formId === 'loginForm' ? 'login' : 'register');
    };

})();

// Add CSS animations
const styleSheet = document.createElement('style');
styleSheet.textContent = `
    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideOutUp {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(-20px);
        }
    }
`;
document.head.appendChild(styleSheet);
