<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focera | Intelligent Monitoring</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased bg-gray-50 font-sans text-gray-900">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-indigo-600 tracking-tighter">FOCERA</span>
                </div>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#home" class="hover:text-indigo-600">Home</a>
                    <a href="#about" class="hover:text-indigo-600">About Us</a>
                    
                    @if (Route::has('login'))
                        @auth
                            <!-- If logged in, show Dashboard -->
                            <a href="{{ url('/dashboard') }}" class="bg-indigo-600 text-white px-5 py-2 rounded-full">Dashboard</a>
                        @else
                            <!-- If logged out, show Login and Register -->
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-indigo-600">Log in</a>
                            <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-5 py-2 rounded-full">Get Started</a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 bg-gradient-to-b from-indigo-50 to-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 mb-6">
                Your Security, <span class="text-indigo-600">Redefined.</span>
            </h1>
            <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto">
                Focera connects your home and business CCTV systems into one intelligent monitoring hub. Accessible anywhere, anytime.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#features" class="px-8 py-4 bg-gray-900 text-white rounded-lg font-semibold hover:bg-gray-800 transition">Explore Features</a>
                <a href="#contact" class="px-8 py-4 border border-gray-300 rounded-lg font-semibold hover:bg-gray-100 transition">Request Demo</a>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-indigo-600 font-bold uppercase tracking-widest text-sm">Our Mission</span>
                    <h2 class="text-4xl font-bold mt-4 mb-6">Built for Peace of Mind</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Focera started with a simple goal: making high-end surveillance accessible to everyone. Whether you are monitoring a small nursery at home or a multi-floor warehouse, our platform provides the tools to keep your assets safe.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 24/7 Remote Accessibility</li>
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Enterprise-grade Encryption</li>
                    </ul>
                </div>
                <div class="bg-indigo-100 rounded-2xl h-80 flex items-center justify-center">
                    <!-- Placeholder for Image -->
                    <span class="text-indigo-400 font-semibold italic">[ Professional Monitoring Image ]</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-16">Advanced Capabilities</h2>
            <div class="grid md:grid-cols-3 gap-12">
                <div class="p-8 border border-gray-800 rounded-2xl hover:border-indigo-500 transition">
                    <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Live Multi-Stream</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">View up to 16 camera feeds simultaneously with zero latency technology.</p>
                </div>
                <div class="p-8 border border-gray-800 rounded-2xl hover:border-indigo-500 transition">
                    <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Smart Motion Alerts</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Receive instant push notifications when human activity is detected in restricted zones.</p>
                </div>
                <div class="p-8 border border-gray-800 rounded-2xl hover:border-indigo-500 transition">
                    <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Cloud Archiving</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Securely store and review past footage with our encrypted cloud storage solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="py-24">
        <div class="max-w-3xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold">Contact Our Experts</h2>
                <p class="text-gray-600 mt-4">Have questions? We're here to help you secure your perimeter.</p>
            </div>
            <form action="#" class="grid grid-cols-1 gap-6 bg-white p-8 shadow-xl rounded-2xl border border-gray-100">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="John Doe">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="john@business.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="How can we help?"></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-3 px-6 rounded-md font-bold hover:bg-indigo-700 transition">Send Inquiry</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-50 py-12 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Focera Security Systems. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>