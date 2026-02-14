<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #6366f1;
            --primary-light: #818cf8;
            --secondary: #a78bfa;
            --accent: #f472b6;
            --light: #f8fafc;
            --dark: #1e293b;
            --text: #475569;
            --border: #e2e8f0;
            --shadow: rgba(0, 0, 0, 0.05);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            position: relative;
            /* Hapus overflow: hidden; untuk memungkinkan scrolling */
        }

        /* Tambahkan wrapper untuk konten agar tetap di tengah */
        .content-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 40px); /* Kurangi padding */
            padding: 20px 0;
        }

        /* Background aesthetic elements */
        .bg-element {
            position: fixed; /* Ubah dari absolute ke fixed */
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.6;
            z-index: 0;
        }

        .bg-element-1 {
            width: 300px;
            height: 300px;
            background: var(--primary-light);
            top: -100px;
            right: -100px;
        }

        .bg-element-2 {
            width: 250px;
            height: 250px;
            background: var(--secondary);
            bottom: -80px;
            left: -80px;
        }

        .bg-element-3 {
            width: 200px;
            height: 200px;
            background: var(--accent);
            top: 50%;
            left: 60%;
            transform: translate(-50%, -50%);
        }

        /* Register container */
        .register-container {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            box-shadow: 0 20px 40px var(--shadow);
            width: 100%;
            max-width: 420px;
            padding: 50px 40px;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .register-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
        }

        /* Logo section */
        .logo-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.2);
            transition: transform 0.3s ease;
        }

        .logo-icon:hover {
            transform: translateY(-5px);
        }

        .logo-icon i {
            font-size: 32px;
            color: white;
        }

        .logo-title {
            font-size: 28px;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .logo-subtitle {
            font-size: 15px;
            color: var(--text);
            font-weight: 400;
        }

        /* Form elements */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 10px;
            display: block;
            color: var(--text);
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 16px;
            z-index: 2;
        }

        .form-control {
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 15px 15px 15px 48px;
            font-size: 15px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
            background-color: rgba(255, 255, 255, 0.9);
        }

        .password-toggle {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #94a3b8;
            font-size: 16px;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: var(--primary);
        }

        /* Password strength indicator */
        .password-strength {
            margin-top: 8px;
            height: 4px;
            background-color: var(--border);
            border-radius: 2px;
            overflow: hidden;
        }

        .password-strength-meter {
            height: 100%;
            width: 0;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .strength-weak {
            width: 33%;
            background-color: #ef4444;
        }

        .strength-medium {
            width: 66%;
            background-color: #f59e0b;
        }

        .strength-strong {
            width: 100%;
            background-color: var(--primary);
        }

        /* Terms and conditions */
        .terms-group {
            margin: 25px 0;
        }

        .terms-check {
            display: flex;
            align-items: flex-start;
        }

        .terms-check input {
            margin-top: 3px;
            margin-right: 10px;
            accent-color: var(--primary);
        }

        .terms-check label {
            font-size: 14px;
            color: var(--text);
            line-height: 1.4;
        }

        .terms-check a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .terms-check a:hover {
            text-decoration: underline;
        }

        /* Back button */
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 2;
            text-decoration: none;
            color: var(--primary);
        }

        .back-button:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateX(-3px);
            color: var(--secondary);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .back-button i {
            font-size: 16px;
        }

        /* Register button */
        .register-btn {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-bottom: 25px;
            letter-spacing: 0.5px;
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.2);
        }

        .register-btn:active {
            transform: translateY(0);
        }

        /* Login link */
        .login-section {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid var(--border);
        }

        .login-text {
            font-size: 14px;
            color: var(--text);
            margin: 0;
        }

        .login-link {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }

        .login-link:hover {
            color: var(--secondary);
        }

        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 16px 20px;
            display: flex;
            align-items: center;
            max-width: 320px;
            transform: translateX(400px);
            transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            z-index: 1000;
        }

        .notification.show {
            transform: translateX(0);
        }

        .notification-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .notification.success .notification-icon {
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
        }

        .notification.error .notification-icon {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .notification-content {
            flex: 1;
        }

        .notification-title {
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 2px;
        }

        .notification-message {
            font-size: 13px;
            color: var(--text);
        }

        .notification-close {
            background: none;
            border: none;
            font-size: 16px;
            color: #94a3b8;
            cursor: pointer;
            margin-left: 10px;
        }

        /* Floating particles */
        .particles {
            position: fixed; /* Ubah dari absolute ke fixed */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            pointer-events: none;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .register-container {
                padding: 40px 30px;
            }
            
            .logo-title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <!-- Background elements -->
    <div class="bg-element bg-element-1"></div>
    <div class="bg-element bg-element-2"></div>
    <div class="bg-element bg-element-3"></div>
    
    <!-- Floating particles -->
    <div class="particles" id="particles"></div>

    <!-- Content wrapper untuk memungkinkan scrolling -->
    <div class="content-wrapper">
        <!-- Register container -->
        <div class="register-container">
            <!-- Back to landing page button -->
        <a href="/" class="back-button" title="Kembali ke Halaman Utama">
            <i class="fas fa-arrow-left"></i>
        </a>
            <div class="logo-section">
                <div class="logo-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h1 class="logo-title">Buat Akun</h1>
                <p class="logo-subtitle">Daftar untuk bergabung dengan kami</p>
            </div>

            <form action="{{ route('register') }}" method="POST" id="registerForm">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama lengkap" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('password')">
                            <i class="fas fa-eye" id="toggle-password-icon"></i>
                        </button>
                    </div>
                    <div class="password-strength">
                        <div class="password-strength-meter" id="password-strength-meter"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('password_confirmation')">
                            <i class="fas fa-eye" id="toggle-password-confirmation-icon"></i>
                        </button>
                    </div>
                </div>

                <div class="terms-group">
                    <div class="terms-check">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a></label>
                    </div>
                </div>

                <button type="submit" class="register-btn">
                    Daftar Sekarang
                </button>
            </form>

            <div class="login-section">
                <p class="login-text">Sudah punya akun? <a href="{{ url('/login') }}" class="login-link">Masuk</a></p>
            </div>
        </div>
    </div>

    <!-- Notification -->
    <div class="notification" id="notification">
        <div class="notification-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="notification-content">
            <div class="notification-title">Berhasil</div>
            <div class="notification-message">Pendaftaran berhasil! Mengalihkan...</div>
        </div>
        <button class="notification-close" onclick="hideNotification()">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <script>
        // Toggle password visibility
        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleIcon = document.getElementById(`toggle-${fieldId}-icon`);
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        // Password strength checker
        const passwordInput = document.getElementById('password');
        const passwordStrengthMeter = document.getElementById('password-strength-meter');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            // Check password strength
            if (password.length >= 8) strength += 1;
            if (password.match(/[a-z]+/)) strength += 1;
            if (password.match(/[A-Z]+/)) strength += 1;
            if (password.match(/[0-9]+/)) strength += 1;
            if (password.match(/[$@#&!]+/)) strength += 1;
            
            // Update strength meter
            passwordStrengthMeter.className = 'password-strength-meter';
            
            if (password.length > 0) {
                if (strength <= 2) {
                    passwordStrengthMeter.classList.add('strength-weak');
                } else if (strength <= 3) {
                    passwordStrengthMeter.classList.add('strength-medium');
                } else {
                    passwordStrengthMeter.classList.add('strength-strong');
                }
            }
        });

        // Show notification
        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            const icon = notification.querySelector('.notification-icon i');
            const title = notification.querySelector('.notification-title');
            const messageEl = notification.querySelector('.notification-message');
            
            // Reset classes
            notification.className = 'notification';
            notification.classList.add(type);
            
            // Set icon based on type
            if (type === 'success') {
                icon.className = 'fas fa-check';
                title.textContent = 'Berhasil';
            } else {
                icon.className = 'fas fa-exclamation-circle';
                title.textContent = 'Error';
            }
            
            // Set message
            messageEl.textContent = message;
            
            // Show notification
            notification.classList.add('show');
            
            // Auto hide after 3 seconds
            setTimeout(() => {
                hideNotification();
            }, 3000);
        }

        function hideNotification() {
            const notification = document.getElementById('notification');
            notification.classList.remove('show');
        }

        // Form validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const passwordConfirmation = document.getElementById('password_confirmation').value;
            const terms = document.getElementById('terms').checked;
            
            if (!name || !email || !password || !passwordConfirmation) {
                e.preventDefault();
                showNotification('Harap isi semua field', 'error');
            } else if (!validateEmail(email)) {
                e.preventDefault();
                showNotification('Format email tidak valid', 'error');
            } else if (password !== passwordConfirmation) {
                e.preventDefault();
                showNotification('Password tidak cocok', 'error');
            } else if (!terms) {
                e.preventDefault();
                showNotification('Harap setujui syarat dan ketentuan', 'error');
            } else {
                // Show loading state
                const submitBtn = this.querySelector('.register-btn');
                const originalText = submitBtn.textContent;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Memproses...';
                submitBtn.disabled = true;
                
                // Simulate registration process
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    showNotification('Pendaftaran berhasil! Mengalihkan...', 'success');
                }, 2000);
            }
        });
        
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 15;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // Random size
                const size = Math.random() * 6 + 2;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Random opacity
                particle.style.opacity = Math.random() * 0.5 + 0.1;
                
                // Random animation duration
                const duration = Math.random() * 20 + 10;
                particle.style.animation = `float ${duration}s linear infinite`;
                
                particlesContainer.appendChild(particle);
            }
        }

        // Add floating animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes float {
                0% {
                    transform: translateY(0) translateX(0);
                    opacity: 0;
                }
                10% {
                    opacity: 0.4;
                }
                90% {
                    opacity: 0.4;
                }
                100% {
                    transform: translateY(-100vh) translateX(20px);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Initialize particles
        createParticles();
    </script>
</body>
</html>