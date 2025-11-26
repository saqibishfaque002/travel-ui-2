<section id="contact" class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-3">Contact Us</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">
                Have questions? We're here to help. Get in touch with our travel experts
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-xl border border-slate-200 p-8 shadow-sm">
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Send us a Message</h3>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700 mb-2">
                            Your Name
                        </label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required class="w-full px-4 py-2 rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required class="w-full px-4 py-2 rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-700 mb-2">
                            Message
                        </label>
                        <textarea id="message" name="message" placeholder="Tell us about your travel plans..." required rows="6" class="w-full resize-none px-4 py-2 rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-sky-500 hover:bg-sky-600 text-white hover:scale-105 transition-all duration-200 px-4 py-3 rounded-md font-semibold flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" x2="11" y1="2" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8">
                <div class="bg-slate-50 rounded-xl p-8 border border-slate-200">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Get in Touch</h3>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-sky-500/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Phone</h4>
                                <p class="text-slate-600">+1 (555) 123-4567</p>
                                <p class="text-slate-600">+1 (555) 987-6543</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-sky-500/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="16" x="2" y="4" rx="2"/>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Email</h4>
                                <p class="text-slate-600">info@awtraveltours.com</p>
                                <p class="text-slate-600">support@awtraveltours.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-sky-500/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Office</h4>
                                <p class="text-slate-600">123 Travel Street</p>
                                <p class="text-slate-600">New York, NY 10001</p>
                                <p class="text-slate-600">United States</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map placeholder -->
                <div class="bg-slate-100 rounded-xl overflow-hidden border border-slate-200 h-64">
                    <img src="{{ asset('world-map-with-location-pins.jpg') }}" alt="Office Location Map" class="w-full h-full object-cover">
                </div>

                <!-- Business Hours -->
                <div class="bg-sky-500 rounded-xl p-8 text-white">
                    <h3 class="text-xl font-bold mb-4">Business Hours</h3>
                    <div class="space-y-2 text-sky-50">
                        <div class="flex justify-between">
                            <span>Monday - Friday</span>
                            <span class="font-semibold">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Saturday</span>
                            <span class="font-semibold">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sunday</span>
                            <span class="font-semibold">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

