<?php
/**
 * Front Page Template
 * 
 * @package SabLearn_Agents
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-bg">
        <div class="hero-bg-circle hero-bg-circle-1"></div>
        <div class="hero-bg-circle hero-bg-circle-2"></div>
    </div>
    
    <div class="hero-content">
        <!-- Badge -->
        <div class="hero-badge">
            <svg class="hero-badge-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
            <span>100% Practical Learning</span>
        </div>

        <!-- Main Heading -->
        <h1>
            Master <span class="text-primary">AI Agents</span> &<br>
            <span class="gradient-text">No-Code Automation</span>
        </h1>

        <!-- Subheading -->
        <p class="hero-subtitle">
            Learn Make.com, n8n, and AI Agent frameworks from scratch. Build real-world automation 
            solutions and start your freelancing journey with <strong>Lifetime Mentorship</strong>.
        </p>

        <!-- Stats -->
        <div class="hero-stats">
            <div class="hero-stat">
                <svg class="hero-stat-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 8V4H8"/>
                    <rect width="16" height="12" x="4" y="8" rx="2"/>
                    <path d="M2 14h2"/>
                    <path d="M20 14h2"/>
                    <path d="M15 13v2"/>
                    <path d="M9 13v2"/>
                </svg>
                <span>AI Agent Frameworks</span>
            </div>
            <div class="hero-stat">
                <svg class="hero-stat-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                </svg>
                <span>Make.com & n8n</span>
            </div>
            <div class="hero-stat">
                <svg class="hero-stat-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                <span>Lifetime Support</span>
            </div>
        </div>

        <!-- CTA Buttons -->
        <div class="hero-buttons">
            <a href="https://api.whatsapp.com/send?phone=923296276461&text=Hi%2C%20I%27m%20interested%20in%20the%20SabLearn%20Agents%20course!" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
                Request Free Demo
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"/>
                    <path d="m12 5 7 7-7 7"/>
                </svg>
            </a>
            <a href="https://api.whatsapp.com/send?phone=923296276461&text=Hi%2C%20I%20want%20to%20contact%20SabLearn%20Agents!" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-lg">
                Contact Today
            </a>
        </div>

        <!-- Price Tag -->
        <div class="hero-price">
            <span class="hero-price-label">Starting at just</span>
            <span class="hero-price-value">PKR 10,000</span>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section services-section" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">What You'll Learn</span>
            <h2 class="section-title">
                Complete <span class="text-primary">Course Modules</span>
            </h2>
            <p class="section-subtitle">
                A comprehensive curriculum designed for beginners to advanced learners. 
                Every module includes hands-on projects and real-world applications.
            </p>
        </div>

        <div class="grid grid-3">
            <!-- Service 1 -->
            <div class="card service-card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <path d="M3 9h18"/>
                            <path d="M9 21V9"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Make.com Mastery</h3>
                </div>
                <div class="card-content">
                    <p class="card-description">Learn to build powerful automated workflows connecting 1000+ apps. From simple automations to complex multi-step scenarios.</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="card service-card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                            <polyline points="16 18 22 12 16 6"/>
                            <polyline points="8 6 2 12 8 18"/>
                        </svg>
                    </div>
                    <h3 class="card-title">n8n Automation</h3>
                </div>
                <div class="card-content">
                    <p class="card-description">Master the open-source automation tool. Self-host your workflows and create custom integrations with full control.</p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="card service-card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                            <path d="M12 8V4H8"/>
                            <rect width="16" height="12" x="4" y="8" rx="2"/>
                            <path d="M2 14h2"/>
                            <path d="M20 14h2"/>
                            <path d="M15 13v2"/>
                            <path d="M9 13v2"/>
                        </svg>
                    </div>
                    <h3 class="card-title">AI Agent Development</h3>
                </div>
                <div class="card-content">
                    <p class="card-description">Build intelligent AI agents that can research, analyze, and execute tasks autonomously using cutting-edge frameworks.</p>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="card service-card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                            <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/>
                            <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"/>
                            <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"/>
                            <path d="M17.599 6.5a3 3 0 0 0 .399-1.375"/>
                            <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"/>
                            <path d="M3.477 10.896a4 4 0 0 1 .585-.396"/>
                            <path d="M19.938 10.5a4 4 0 0 1 .585.396"/>
                            <path d="M6 18a4 4 0 0 1-1.967-.516"/>
                            <path d="M19.967 17.484A4 4 0 0 1 18 18"/>
                        </svg>
                    </div>
                    <h3 class="card-title">ChatGPT & AI Integration</h3>
                </div>
                <div class="card-content">
                    <p class="card-description">Integrate OpenAI, Claude, and other AI models into your automations. Create AI-powered solutions for real clients.</p>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="card service-card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                            <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/>
                            <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/>
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/>
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Freelancing Blueprint</h3>
                </div>
                <div class="card-content">
                    <p class="card-description">Learn how to find clients, price your services, and deliver professional automation solutions on platforms like Upwork & Fiverr.</p>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="card service-card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Lifetime Mentorship</h3>
                </div>
                <div class="card-content">
                    <p class="card-description">Get unlimited access to our community, weekly Q&A sessions, and one-on-one guidance whenever you're stuck.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="section" id="pricing">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Simple Pricing</span>
            <h2 class="section-title">
                One Price, <span class="text-primary">Lifetime Value</span>
            </h2>
            <p class="section-subtitle">
                No hidden fees. No monthly subscriptions. Just one investment in your future.
            </p>
        </div>

        <div class="pricing-wrapper">
            <div class="card pricing-card pricing-featured">
                <!-- Badge -->
                <div class="pricing-badge-top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m2 4 3 12h14l3-12-6 7-4-7-4 7-6-7zm3 16h14"/>
                    </svg>
                    Best Value
                </div>

                <div class="card-header text-center">
                    <!-- Stars -->
                    <div class="pricing-stars">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#eab308" stroke="#eab308" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#eab308" stroke="#eab308" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#eab308" stroke="#eab308" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#eab308" stroke="#eab308" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#eab308" stroke="#eab308" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <h3 class="card-title">Complete Course Bundle</h3>
                    <p class="card-description">Everything you need to become an automation expert</p>
                    
                    <!-- Price -->
                    <div class="pricing-price">
                        <div class="pricing-original">
                            <span class="price-strikethrough">PKR 25,000</span>
                            <span class="price-discount-badge">60% OFF</span>
                        </div>
                        <div class="price-main">PKR 10,000</div>
                        <p class="price-note">One-time payment • Lifetime access</p>
                    </div>
                </div>

                <div class="card-content">
                    <!-- Features List -->
                    <ul class="pricing-features-list">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Complete Make.com & n8n Training</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> AI Agent Development Modules</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> ChatGPT & OpenAI Integration</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Freelancing Blueprint & Templates</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Real Client Project Walkthroughs</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Lifetime Access to All Content</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Future Course Updates Included</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Private Community Access</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Weekly Live Q&A Sessions</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Lifetime Mentorship Support</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Completion Certificate</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> 1-on-1 Support When Stuck</li>
                    </ul>

                    <!-- CTA Button -->
                    <a href="https://api.whatsapp.com/send?phone=923296276461&text=Hi%2C%20I%20want%20to%20enroll%20in%20SabLearn%20Agents%20course!" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg btn-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                        </svg>
                        Get Started Today
                    </a>

                    <!-- Trust Badge -->
                    <p class="trust-badge">
                        ✓ Secure payment • ✓ Instant access • ✓ 7-day money-back guarantee
                    </p>
                </div>
            </div>
        </div>

        <!-- Trust Elements -->
        <div class="text-center mt-8">
            <p class="text-muted">
                Trusted by <strong>100+ students</strong> across Pakistan
            </p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section faq-section" id="faq">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Got Questions?</span>
            <h2 class="section-title">
                Frequently Asked <span class="text-primary">Questions</span>
            </h2>
            <p class="section-subtitle">
                Everything you need to know about the course, payment, and support.
            </p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <h4 class="faq-question">Do I need any coding experience to join this course?</h4>
                <p class="faq-answer">Absolutely not! This course is designed for complete beginners. We focus on no-code tools like Make.com and n8n, which require zero programming knowledge. You'll learn everything step-by-step with practical examples.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">What tools will I learn in this course?</h4>
                <p class="faq-answer">You'll master Make.com (Integromat), n8n, AI agent frameworks, ChatGPT/OpenAI integration, and various automation tools. We also cover how to connect with 1000+ apps like Google Sheets, WhatsApp, Slack, Shopify, and more.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">How is the 'Lifetime Mentorship' different from regular support?</h4>
                <p class="faq-answer">Unlike one-time courses, we provide ongoing support forever. You get access to our private community, weekly live Q&A sessions, direct messaging with instructors, and help with your real client projects even after completing the course.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">Can I start freelancing after this course?</h4>
                <p class="faq-answer">Yes! We have a dedicated module on freelancing that covers finding clients on Upwork, Fiverr, and LinkedIn. Many of our students land their first automation gig within 2-3 weeks of completing the course.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">What is the course duration and format?</h4>
                <p class="faq-answer">The core curriculum takes 4-6 weeks to complete at your own pace. All lessons are pre-recorded video tutorials with downloadable resources. You also get lifetime access to all materials and future updates.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">Is the PKR 10,000 a one-time payment?</h4>
                <p class="faq-answer">Yes, it's a one-time payment that gives you lifetime access to all course content, future updates, and our mentorship community. No hidden fees or monthly subscriptions.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">Do you provide certificates?</h4>
                <p class="faq-answer">Yes! Upon completing all modules and projects, you'll receive a verified certificate from SabLearn Agents that you can add to your LinkedIn profile and resume.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">What if I get stuck on a project?</h4>
                <p class="faq-answer">That's what our mentorship is for! Post your question in our community, join our weekly live sessions, or message our instructors directly. We're committed to helping you succeed.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
