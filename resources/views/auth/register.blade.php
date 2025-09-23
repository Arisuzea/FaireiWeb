<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register | Auth System</title>
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
	</style>
</head>
<body class="bg-white text-gray-700 font-sans" style="overflow: hidden;">
	<!-- Navigation -->
	@include('components.nav')

	<div class="min-h-screen flex items-center justify-center p-4 auth-container">
		<div class="w-full max-w-md">
			<div class="text-center mb-8">
				<h1 class="text-3xl font-bold text-primary mb-2">Create Account</h1>
				<p class="text-gray-500">Get started with your free account</p>
			</div>
			<div class="bg-white rounded-xl shadow-md p-8" data-aos="fade-up">
				<form id="registerForm" method="POST" action="{{ secure_url('register') }}">
					@csrf
					<div class="grid grid-cols-2 gap-4 mb-5">
						<div>
							<label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
							<div class="relative">
								<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
									<i data-feather="user" class="text-gray-400"></i>
								</div>
								<input type="text" id="firstName" name="first_name" class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 input-focus focus:outline-none transition duration-200" placeholder="John" required>
							</div>
						</div>
						<div>
							<label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
							<div class="relative">
								<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
									<i data-feather="user" class="text-gray-400"></i>
								</div>
								<input type="text" id="lastName" name="last_name" class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 input-focus focus:outline-none transition duration-200" placeholder="Doe" required>
							</div>
						</div>
					</div>
					<div class="mb-5">
						<label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
						<div class="relative">
							<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
								<i data-feather="mail" class="text-gray-400"></i>
							</div>
							<input type="email" id="email" name="email" class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 input-focus focus:outline-none transition duration-200" placeholder="your@email.com" required>
						</div>
					</div>
					<div class="mb-5">
						<label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
						<div class="relative">
							<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
								<i data-feather="lock" class="text-gray-400"></i>
							</div>
							<input type="password" id="password" name="password" class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 input-focus focus:outline-none transition duration-200" placeholder="••••••••" required>
						</div>
						<div class="mt-2 grid grid-cols-4 gap-1">
							<div class="password-strength bg-gray-200 rounded-full" id="strength-1"></div>
							<div class="password-strength bg-gray-200 rounded-full" id="strength-2"></div>
							<div class="password-strength bg-gray-200 rounded-full" id="strength-3"></div>
							<div class="password-strength bg-gray-200 rounded-full" id="strength-4"></div>
						</div>
					</div>
					<div class="mb-5">
						<label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
						<div class="relative">
							<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
								<i data-feather="lock" class="text-gray-400"></i>
							</div>
							<input type="password" id="confirmPassword" name="password_confirmation" class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 input-focus focus:outline-none transition duration-200" placeholder="••••••••" required>
						</div>
					</div>
					<div class="flex items-center mb-6">
						<input id="terms" type="checkbox" class="h-4 w-4 text-primary rounded border-gray-300 focus:ring-primary" required>
						<label for="terms" class="ml-2 block text-sm text-gray-700">
							I agree to the <a href="#" class="text-primary hover:text-primary/80 font-medium">Terms of Service</a> and <a href="#" class="text-primary hover:text-primary/80 font-medium">Privacy Policy</a>
						</label>
					</div>
					<button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center">
						<span>Create Account</span>
						<i data-feather="user-plus" class="ml-2 w-4 h-4"></i>
					</button>
				</form>
				<div class="mt-6">
					<div class="relative">
						<div class="absolute inset-0 flex items-center">
							<div class="w-full border-t border-gray-300"></div>
						</div>
						<div class="relative flex justify-center text-sm">
							<span class="px-2 bg-white text-gray-500">Or sign up with</span>
						</div>
					</div>
					<div class="mt-6 grid grid-cols-2 gap-3">
						<a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition duration-200">
							<i data-feather="github" class="h-5 w-5"></i>
						</a>
						<a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition duration-200">
							<i data-feather="twitter" class="h-5 w-5"></i>
						</a>
					</div>
				</div>
				<p class="mt-6 text-center text-sm text-gray-500">
					Already have an account?
					<a href="{{ route('login') }}" class="font-medium text-primary hover:text-primary/80">Sign in</a>
				</p>
			</div>
		</div>
	</div>
	<script src="{{ secure_asset('js/register.js') }}"></script>
</body>
</html>