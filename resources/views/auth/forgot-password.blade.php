<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fairei | Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0EA5E9',
                        secondary: '#FB7185',
                        accent: '#84CC16',
                    }
                }
            }
        }
    </script>
    <style>
        .auth-container {
            background-image: radial-gradient(circle at 10% 20%, rgba(14, 165, 233, 0.05) 0%, rgba(14, 165, 233, 0.05) 90%);
        }
        .input-focus:focus {
            border-color: #0EA5E9;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.2);
        }
        .password-strength {
            height: 4px;
            transition: all 0.3s;
        }
        .floating-illustration {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="bg-white text-gray-700 font-sans">
    <!-- Navigation would be included here -->
    @include('components.nav')
    <div class="min-h-screen flex items-center justify-center p-4 auth-container">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="floating-illustration">
                        <svg width="120" height="120" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.4 15C19.2669 15.3016 19.227 15.6352 19.2849 15.9586C19.3428 16.282 19.4962 16.581 19.725 16.8183C19.9538 17.0556 20.2476 17.2202 20.5676 17.2902C20.8876 17.3602 21.2185 17.3326 21.52 17.21" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.6 15C4.73314 15.3016 4.77301 15.6352 4.71511 15.9586C4.65721 16.282 4.5038 16.581 4.275 16.8183C4.0462 17.0556 3.75244 17.2202 3.43242 17.2902C3.1124 17.3602 2.7815 17.3326 2.48 17.21" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.21 4.48C17.3326 4.7815 17.3602 5.1124 17.2902 5.43242C17.2202 5.75244 17.0556 6.0462 16.8183 6.275C16.581 6.5038 16.282 6.65721 15.9586 6.71511C15.6352 6.77301 15.3016 6.73314 15 6.6" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.79 19.52C6.6674 19.2185 6.6398 18.8876 6.7098 18.5676C6.7798 18.2476 6.9444 17.9538 7.1817 17.725C7.419 17.4962 7.718 17.3428 8.0414 17.2849C8.3648 17.227 8.6984 17.2669 9 17.4" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 6.6C8.6984 6.73314 8.3648 6.77301 8.0414 6.71511C7.718 6.65721 7.419 6.5038 7.1817 6.275C6.9444 6.0462 6.7798 5.75244 6.7098 5.43242C6.6398 5.1124 6.6674 4.7815 6.79 4.48" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.4 9C17.2669 8.6984 17.227 8.3648 17.2849 8.0414C17.3428 7.718 17.4962 7.419 17.725 7.1817C17.9538 6.9444 18.2476 6.7798 18.5676 6.7098C18.8876 6.6398 19.2185 6.6674 19.52 6.79" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.6 15C6.3016 14.8669 5.968 14.827 5.6446 14.8849C5.3212 14.9428 5.0222 15.0962 4.785 15.325C4.5478 15.5538 4.3832 15.8476 4.3132 16.1676C4.2432 16.4876 4.2708 16.8185 4.393 17.12" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.52 6.79C19.2185 6.6674 18.8876 6.6398 18.5676 6.7098C18.2476 6.7798 17.9538 6.9444 17.725 7.1817C17.4962 7.419 17.3428 7.718 17.2849 8.0414C17.227 8.3648 17.2669 8.6984 17.4 9" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl font-bold text-primary mb-2">Reset Your Password</h1>
                <p class="text-gray-500">Enter your email to receive a reset link</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-8" data-aos="fade-up">
                <form id="forgotPasswordForm" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-feather="mail" class="text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email" class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 input-focus focus:outline-none transition duration-200" placeholder="your@email.com" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                        <span>Send Reset Link</span>
                        <i data-feather="send" class="ml-2 w-4 h-4"></i>
                    </button>
                </form>
                
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Remember your password?</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 text-center">
                        <a href="{{ secure_url('login') }}" class="w-full inline-flex justify-center items-center py-2 px-4 rounded-md shadow-sm bg-white text-sm font-medium text-primary hover:bg-gray-50 transition duration-200 border border-primary">
                            <i data-feather="log-in" class="h-4 w-4 mr-2"></i>
                            Sign in to your account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
        <x-modal id="mainModal" title="{{ $modalTitle ?? 'Default Title' }}">
            {{ $modalMessage ?? 'Default message' }}
        </x-modal>

    
    @if (session('status'))
            <div class="text-green-600 mb-4">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="text-red-600 mb-4">
                {{ $errors->first() }}
            </div>
        @endif

    <script>
        window.flashModal = {
            show: @json(session('showModal') ?? false),
            id: 'mainModal',
            title: @json(session('modalTitle') ?? 'Default Title'),
            message: @json(session('modalMessage') ?? 'Default message')
        };
    </script>
    <script src="{{ secure_asset('js/forgot-password.js') }}"></script>

    
</body>
</html>
