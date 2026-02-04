<?php
/**
 * Front Page Template
 *
 * @package SabLearn_Agents
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg">
        <div class="hero-bg-circle hero-bg-circle-1"></div>
        <div class="hero-bg-circle hero-bg-circle-2"></div>
    </div>
    
    <div class="hero-content">
        <div class="hero-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>
            </svg>
            <span>🚀 Limited Time Offer - 50% OFF</span>
        </div>
        
        <h1>Master <span class="gradient-text">AI Agents</span> & No-Code Automation</h1>
        
        <p class="hero-subtitle">
            Learn Make.com, n8n, and AI Agent frameworks with 100% practical learning. 
            Build real-world automations and get lifetime mentorship support.
        </p>
        
        <div class="hero-stats">
            <div class="hero-stat">
                <svg class="hero-stat-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                <span>500+ Students</span>
            </div>
            <div class="hero-stat">
                <svg class="hero-stat-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
                <span>50+ Hours Content</span>
            </div>
            <div class="hero-stat">
                <svg class="hero-stat-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                    <path d="m9 12 2 2 4-4"/>
                </svg>
                <span>Lifetime Access</span>
            </div>
        </div>
        
        <div class="hero-buttons">
            <a href="#enroll" class="btn btn-primary btn-lg">
                Enroll Now
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"/>
                    <path d="m12 5 7 7-7 7"/>
                </svg>
            </a>
            <a href="#curriculum" class="btn btn-outline btn-lg">
                View Curriculum
            </a>
        </div>
        
        <div class="hero-price">
            <span class="hero-price-label">Starting at</span>
            <span class="hero-price-value">PKR 15,000</span>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">What You'll Learn</span>
            <h2 class="section-title">Master These Tools</h2>
            <p class="section-subtitle">Comprehensive training on the most in-demand automation tools</p>
        </div>
        
        <div class="grid grid-3">
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="hsl(270, 100%, 65%)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 8V4H8"/>
                            <rect width="16" height="12" x="4" y="8" rx="2"/>
                            <path d="M2 14h2"/>
                            <path d="M20 14h2"/>
                            <path d="M15 13v2"/>
                            <path d="M9 13v2"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Make.com Mastery</h3>
                </div>
                <div class="card-content">
                    <p class="card-description">Build complex automations with visual workflows. Connect 1000+ apps without code.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="hsl(270, 100%, 65%)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M12 1v4"/>
                            <path d="M12 19v4"/>
                            <path d="m4.6 4.6 2.8 2.8"/>
                            <path d="m16.6 16.6 2.8 2.8"/>
                            <path d="M1 12h4"/>
                            <path d="M19 12h4"/>
                            <path d="m4.6 19.4 2.8-2.8"/>
                            <path d="m16.6 7.4 2.8-2.8"/>
                        </svg>
                    </div>
                    <h3 class="card-title">n8n Automation</h3>
                </div>
                <div class="card-content">
                    <p class="card-description">Self-hosted workflow automation. Full control over your data and processes.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="hsl(270, 100%, 65%)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">AI Agent Frameworks</h3>
                </div>
                <div class="card-content">
                    <p class="card-description">Build intelligent AI agents using LangChain, AutoGPT, and custom frameworks.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="section bg-muted">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Pricing</span>
            <h2 class="section-title">Choose Your Plan</h2>
            <p class="section-subtitle">Flexible pricing for every learning journey</p>
        </div>
        
        <div class="grid grid-3">
            <div class="card pricing-card">
                <div class="card-header">
                    <h3 class="card-title">Basic</h3>
                    <div class="price">
                        <span class="price-value">PKR 15,000</span>
                        <span class="price-period">one-time</span>
                    </div>
                </div>
                <div class="card-content">
                    <ul class="pricing-features">
                        <li>✓ Make.com Course</li>
                        <li>✓ 20+ Hours Content</li>
                        <li>✓ Community Access</li>
                        <li>✓ Certificate</li>
                    </ul>
                    <a href="#enroll" class="btn btn-outline" style="width: 100%;">Get Started</a>
                </div>
            </div>
            
            <div class="card pricing-card pricing-featured">
                <div class="pricing-badge">Most Popular</div>
                <div class="card-header">
                    <h3 class="card-title">Pro Bundle</h3>
                    <div class="price">
                        <span class="price-value">PKR 35,000</span>
                        <span class="price-period">one-time</span>
                    </div>
                </div>
                <div class="card-content">
                    <ul class="pricing-features">
                        <li>✓ All Courses Included</li>
                        <li>✓ 50+ Hours Content</li>
                        <li>✓ 1-on-1 Mentorship</li>
                        <li>✓ Priority Support</li>
                        <li>✓ Real Projects</li>
                    </ul>
                    <a href="#enroll" class="btn btn-primary" style="width: 100%;">Get Pro Access</a>
                </div>
            </div>
            
            <div class="card pricing-card">
                <div class="card-header">
                    <h3 class="card-title">Enterprise</h3>
                    <div class="price">
                        <span class="price-value">Custom</span>
                        <span class="price-period">contact us</span>
                    </div>
                </div>
                <div class="card-content">
                    <ul class="pricing-features">
                        <li>✓ Team Training</li>
                        <li>✓ Custom Curriculum</li>
                        <li>✓ Dedicated Support</li>
                        <li>✓ On-site Training</li>
                    </ul>
                    <a href="#contact" class="btn btn-outline" style="width: 100%;">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">FAQ</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>
        
        <div class="faq-list">
            <div class="faq-item">
                <h4 class="faq-question">Do I need coding experience?</h4>
                <p class="faq-answer">No! Our courses are designed for complete beginners. We focus on no-code and low-code solutions.</p>
            </div>
            <div class="faq-item">
                <h4 class="faq-question">How long do I have access?</h4>
                <p class="faq-answer">You get lifetime access to all course materials, including future updates.</p>
            </div>
            <div class="faq-item">
                <h4 class="faq-question">Is there a refund policy?</h4>
                <p class="faq-answer">Yes, we offer a 7-day money-back guarantee if you're not satisfied.</p>
            </div>
            <div class="faq-item">
                <h4 class="faq-question">Will I get a certificate?</h4>
                <p class="faq-answer">Yes, you'll receive a certificate of completion for each course.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section bg-muted">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Contact</span>
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Have questions? We're here to help!</p>
        </div>
        
        <div class="contact-cta">
            <a href="https://wa.me/923001234567" class="btn btn-primary btn-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
