import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";

const faqs = [
  {
    question: "Do I need any coding experience to join this course?",
    answer: "Absolutely not! This course is designed for complete beginners. We focus on no-code tools like Make.com and n8n, which require zero programming knowledge. You'll learn everything step-by-step with practical examples.",
  },
  {
    question: "What tools will I learn in this course?",
    answer: "You'll master Make.com (Integromat), n8n, AI agent frameworks, ChatGPT/OpenAI integration, and various automation tools. We also cover how to connect with 1000+ apps like Google Sheets, WhatsApp, Slack, Shopify, and more.",
  },
  {
    question: "How is the 'Lifetime Mentorship' different from regular support?",
    answer: "Unlike one-time courses, we provide ongoing support forever. You get access to our private community, weekly live Q&A sessions, direct messaging with instructors, and help with your real client projects even after completing the course.",
  },
  {
    question: "Can I start freelancing after this course?",
    answer: "Yes! We have a dedicated module on freelancing that covers finding clients on Upwork, Fiverr, and LinkedIn. Many of our students land their first automation gig within 2-3 weeks of completing the course.",
  },
  {
    question: "What is the course duration and format?",
    answer: "The core curriculum takes 4-6 weeks to complete at your own pace. All lessons are pre-recorded video tutorials with downloadable resources. You also get lifetime access to all materials and future updates.",
  },
  {
    question: "Is the PKR 10,000 a one-time payment?",
    answer: "Yes, it's a one-time payment that gives you lifetime access to all course content, future updates, and our mentorship community. No hidden fees or monthly subscriptions.",
  },
  {
    question: "Do you provide certificates?",
    answer: "Yes! Upon completing all modules and projects, you'll receive a verified certificate from SabLearn Agents that you can add to your LinkedIn profile and resume.",
  },
  {
    question: "What if I get stuck on a project?",
    answer: "That's what our mentorship is for! Post your question in our community, join our weekly live sessions, or message our instructors directly. We're committed to helping you succeed.",
  },
];

const FAQ = () => {
  return (
    <section className="py-20 bg-muted/30" id="faq">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center mb-16">
          <span className="text-primary font-semibold text-sm uppercase tracking-wider">Got Questions?</span>
          <h2 className="text-3xl md:text-5xl font-bold mt-4 mb-6">
            Frequently Asked <span className="text-primary">Questions</span>
          </h2>
          <p className="text-muted-foreground text-lg max-w-2xl mx-auto">
            Everything you need to know about the course, payment, and support.
          </p>
        </div>

        {/* FAQ Accordion */}
        <div className="max-w-3xl mx-auto">
          <Accordion type="single" collapsible className="space-y-4">
            {faqs.map((faq, index) => (
              <AccordionItem 
                key={index} 
                value={`item-${index}`}
                className="bg-card border border-border rounded-xl px-6 data-[state=open]:border-primary/50 transition-colors"
              >
                <AccordionTrigger className="text-left hover:no-underline py-5">
                  <span className="font-semibold text-base pr-4">{faq.question}</span>
                </AccordionTrigger>
                <AccordionContent className="text-muted-foreground pb-5 leading-relaxed">
                  {faq.answer}
                </AccordionContent>
              </AccordionItem>
            ))}
          </Accordion>
        </div>
      </div>
    </section>
  );
};

export default FAQ;
