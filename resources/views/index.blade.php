<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fairei | Modern Quizzing Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #0EA5E9 0%, #84CC16 100%);
        }
        .quiz-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .feature-icon {
            background: linear-gradient(135deg, #FB7185 0%, #84CC16 100%);
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-700">
    <!-- Hero Section with Vanta.js Background -->
    <div id="hero" class="relative overflow-hidden hero-gradient text-white">
        <div class="absolute inset-0 z-0" id="vanta-bg"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Test Your Knowledge</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Join thousands of learners mastering subjects through interactive quizzes.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="bg-white text-[#0EA5E9] px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Get Started</a>
                    <a href="#" class="bg-transparent border-2 border-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-[#0EA5E9] transition duration-300">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    @include('components.nav')

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Why Choose Fairei?</h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">Our platform makes learning engaging and rewarding.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-8 rounded-xl transition duration-300 hover:shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i data-feather="book" class="text-white h-8 w-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4">Diverse Subjects</h3>
                    <p class="text-gray-600 text-center">From science to history, we cover all major subjects with thousands of questions.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-gray-50 p-8 rounded-xl transition duration-300 hover:shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i data-feather="trending-up" class="text-white h-8 w-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4">Track Progress</h3>
                    <p class="text-gray-600 text-center">Visual dashboards show your improvement over time and highlight areas to focus on.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-gray-50 p-8 rounded-xl transition duration-300 hover:shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i data-feather="award" class="text-white h-8 w-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4">Earn Badges</h3>
                    <p class="text-gray-600 text-center">Unlock achievements and compete with friends on our leaderboard system.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Quizzes -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Popular Quizzes</h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">Try our most engaging quizzes today</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Quiz 1 -->
                <div class="quiz-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <img src="http://static.photos/science/640x360/1" alt="Science Quiz" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-[#FB7185] text-white text-xs px-2 py-1 rounded-full">Science</span>
                            <span class="ml-2 text-xs text-gray-500">Medium</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">General Science Challenge</h3>
                        <p class="text-gray-600 mb-4">Test your knowledge across physics, chemistry, and biology.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">15 questions</span>
                            <a href="#" class="text-[#0EA5E9] font-medium hover:underline">Start Quiz</a>
                        </div>
                    </div>
                </div>
                <!-- Quiz 2 -->
                <div class="quiz-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <img src="http://static.photos/history/640x360/2" alt="History Quiz" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-[#84CC16] text-white text-xs px-2 py-1 rounded-full">History</span>
                            <span class="ml-2 text-xs text-gray-500">Hard</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">World History Master</h3>
                        <p class="text-gray-600 mb-4">From ancient civilizations to modern events.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">20 questions</span>
                            <a href="#" class="text-[#0EA5E9] font-medium hover:underline">Start Quiz</a>
                        </div>
                    </div>
                </div>
                <!-- Quiz 3 -->
                <div class="quiz-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300" data-aos="fade-up" data-aos-delay="300">
                    <img src="http://static.photos/mathematics/640x360/3" alt="Math Quiz" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-[#0EA5E9] text-white text-xs px-2 py-1 rounded-full">Math</span>
                            <span class="ml-2 text-xs text-gray-500">Easy</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Quick Math Drills</h3>
                        <p class="text-gray-600 mb-4">Sharpen your arithmetic skills with timed challenges.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">10 questions</span>
                            <a href="#" class="text-[#0EA5E9] font-medium hover:underline">Start Quiz</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12" data-aos="fade-up">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-[#0EA5E9] hover:bg-[#0c94d1] transition duration-300">
                    Browse All Quizzes
                    <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">What Our Users Say</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <img class="h-12 w-12 rounded-full" src="http://static.photos/people/200x200/1" alt="User">
                        <div class="ml-4">
                            <h4 class="text-lg font-medium">Sarah Johnson</h4>
                            <p class="text-gray-500">High School Teacher</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"I use Fairei with my students to reinforce lessons. The progress tracking helps me identify where each student needs help."</p>
                    <div class="flex mt-4 text-yellow-400">
                        <i data-feather="star" class="h-5 w-5 fill-current"></i>
                        <i data-feather="star" class="h-5 w-5 fill-current"></i>
                        <i data-feather="star" class="h-5 w-5 fill-current"></i>
                        <i data-feather="star" class="h-5 w-5 fill-current"></i>
                        <i data-feather="star" class="h-5 w-5 fill-current"></i>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <img class="h-12 w-12 rounded-full" src="http://static.photos/people/200x200/2" alt="User">
                        <div class="ml-4">
                            <h4 class="text-lg font-medium">Michael Chen</h4>
                            <p class="text-gray-500">College Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"The competitive aspect with leaderboards keeps me motivated. I've improved my history grades significantly since using Fairei."</p>
                    <div class="flex mt-4 text-yellow-400">
                        <i data-feather="star" class="h-5 w-5 fill-current"></i>
                        <i data-feather="star" class="h-5 w-5 fill-current"></i>
                        <i data-feather="star" class="h-5 w-5 fill-current"></i>
                        <i data-feather="star" class="h-5 w-5 fill-current"></i>
                        <i data-feather="star" class="h-5 w-5"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 hero-gradient text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
            <h2 class="text-3xl font-extrabold sm:text-4xl mb-6">Ready to Challenge Yourself?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Join thousands of learners improving their knowledge every day.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-white text-[#0EA5E9] px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Sign Up Free</a>
                <a href="#" class="bg-transparent border-2 border-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-[#0EA5E9] transition duration-300">Take a Demo</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script>
        // Initialize Vanta.js globe background
        VANTA.GLOBE({
            el: "#vanta-bg",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x0ea5e9,
            backgroundColor: 0x0,
            size: 0.8
        });

        // Initialize AOS animations
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Replace feather icons
        feather.replace();
    </script>
</body>
</html>
