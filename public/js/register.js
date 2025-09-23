AOS.init();
        feather.replace();
        
        document.getElementById('registerForm').addEventListener('submit', function(e) {
        });
        
        // Password strength indicator
        document.getElementById('password').addEventListener('input', function(e) {
            const password = e.target.value;
            const strengthBars = [
                document.getElementById('strength-1'),
                document.getElementById('strength-2'),
                document.getElementById('strength-3'),
                document.getElementById('strength-4')
            ];
            
            // Reset all bars
            strengthBars.forEach(bar => {
                bar.style.backgroundColor = '#e5e7eb';
            });
            
            // Very weak
            if (password.length > 0) {
                strengthBars[0].style.backgroundColor = '#FB7185';
            }
            
            // Weak
            if (password.length >= 6) {
                strengthBars[1].style.backgroundColor = '#FB7185';
            }
            
            // Medium
            if (password.length >= 8 && /[A-Z]/.test(password) && /[0-9]/.test(password)) {
                strengthBars[0].style.backgroundColor = '#F59E0B';
                strengthBars[1].style.backgroundColor = '#F59E0B';
                strengthBars[2].style.backgroundColor = '#F59E0B';
            }
            
            // Strong
            if (password.length >= 10 && /[A-Z]/.test(password) && /[0-9]/.test(password) && /[^A-Za-z0-9]/.test(password)) {
                strengthBars[0].style.backgroundColor = '#84CC16';
                strengthBars[1].style.backgroundColor = '#84CC16';
                strengthBars[2].style.backgroundColor = '#84CC16';
                strengthBars[3].style.backgroundColor = '#84CC16';
            }
        });