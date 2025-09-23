<nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i data-feather="award" class="text-[#0EA5E9] h-8 w-8"></i>
                        <span class="ml-2 text-xl font-bold text-gray-800">Fairei</span>
                    </div>
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-900 hover:text-[#0EA5E9] px-3 py-2 text-sm font-medium">Home</a>
                    <a href="#" class="text-gray-500 hover:text-[#0EA5E9] px-3 py-2 text-sm font-medium">Quizzes</a>
                    <a href="#" class="text-gray-500 hover:text-[#0EA5E9] px-3 py-2 text-sm font-medium">Leaderboard</a>
                    <a href="#" class="text-gray-500 hover:text-[#0EA5E9] px-3 py-2 text-sm font-medium">About</a>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('login') }}" class="bg-[#0EA5E9] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-[#0c94d1] transition duration-300">Sign In</a>
                    <button class="md:hidden ml-4">
                        <i data-feather="menu" class="h-6 w-6"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>