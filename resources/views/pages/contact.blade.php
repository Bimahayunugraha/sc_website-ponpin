@extends('layouts.main')

@section('content')
    <!-- Contact Section Start -->
    <section id="contact" class="py-24">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">
                    Contact</h2>
            </div>

            <div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">
                <div class="w-full md:w-1/2">
                    <div class="contact">
                        <h2 class="uppercase font-bold text-xl text-gray-700 mb-5 ml-3">Contact Form</h2>
                        <form id="contactForm" action="assets/contact.php">
                            <div class="flex flex-wrap">
                                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                    <div class="mx-3">
                                        <input type="text" class="form-input rounded-full" id="name" name="name"
                                            placeholder="Name" required data-error="Please enter your name">
                                    </div>
                                </div>
                                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                    <div class="mx-3">
                                        <input type="text" placeholder="Email" id="email" class="form-input rounded-full"
                                            name="email" required data-error="Please enter your email">
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="mx-3">
                                        <input type="text" placeholder="Subject" id="subject" name="subject"
                                            class="form-input rounded-full" required data-error="Please enter your subject">
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="mx-3">
                                        <textarea class="form-input rounded-lg" id="message" name="message" placeholder="Your Message" rows="5"
                                            data-error="Write your message" required></textarea>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="submit-button mx-3">
                                        <button class="btn" id="form-submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    {{-- Footer start --}}
    @include('partials.footer')
    {{-- Footer end --}}
@endsection
