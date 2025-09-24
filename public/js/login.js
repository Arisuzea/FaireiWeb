AOS.init();
        feather.replace();
        
        document.getElementById('loginForm').addEventListener('submit', function(e) {
        });

        // Modal Functions
        function openModal(id) {
            const modal = document.getElementById(id);
            if (modal) modal.classList.remove('hidden');
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            if (modal) modal.classList.add('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            if (window.flashModal && window.flashModal.show) {
                const modal = document.getElementById(window.flashModal.id);
                if (modal) {
                    const titleEl = modal.querySelector('h2');
                    const msgEl = modal.querySelector('p');
                    if (titleEl) titleEl.textContent = window.flashModal.title;
                    if (msgEl) msgEl.textContent = window.flashModal.message;

                    openModal(window.flashModal.id);
                }
            }
        });
