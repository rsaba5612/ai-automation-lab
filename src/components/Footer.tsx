import { Bot, Phone, MapPin } from "lucide-react";

const Footer = () => {
  return (
    <footer className="bg-muted/50 border-t border-border">
      <div className="container mx-auto px-4 py-16">
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-12">
          {/* Brand Column */}
          <div className="space-y-4">
            <a href="#" className="flex items-center gap-2">
              <div className="w-10 h-10 bg-primary rounded-xl flex items-center justify-center">
                <Bot className="w-6 h-6 text-primary-foreground" />
              </div>
              <span className="font-bold text-xl">
                Sab<span className="text-primary">Learn</span> Agents
              </span>
            </a>
            <p className="text-muted-foreground leading-relaxed">
              Empowering Pakistan's next generation of automation experts with practical, 
              hands-on training and lifetime mentorship.
            </p>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="font-semibold text-lg mb-4">Quick Links</h4>
            <ul className="space-y-3">
              <li><a href="#services" className="text-muted-foreground hover:text-primary transition-colors">Course Modules</a></li>
              <li><a href="#projects" className="text-muted-foreground hover:text-primary transition-colors">Client Projects</a></li>
              <li><a href="#faq" className="text-muted-foreground hover:text-primary transition-colors">FAQ</a></li>
              <li><a href="#pricing" className="text-muted-foreground hover:text-primary transition-colors">Pricing</a></li>
            </ul>
          </div>

          {/* Tools We Teach */}
          <div>
            <h4 className="font-semibold text-lg mb-4">Tools We Teach</h4>
            <ul className="space-y-3">
              <li><span className="text-muted-foreground">Make.com (Integromat)</span></li>
              <li><span className="text-muted-foreground">n8n Automation</span></li>
              <li><span className="text-muted-foreground">AI Agent Frameworks</span></li>
              <li><span className="text-muted-foreground">ChatGPT & OpenAI</span></li>
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h4 className="font-semibold text-lg mb-4">Contact Us</h4>
            <ul className="space-y-3">
              <li className="flex items-center gap-3 text-muted-foreground">
                <Phone className="w-5 h-5 text-primary" />
                <a href="tel:03296276461" className="hover:text-primary transition-colors">03296276461</a>
              </li>
              <li className="flex items-start gap-3 text-muted-foreground">
                <MapPin className="w-5 h-5 text-primary mt-0.5" />
                Pakistan
              </li>
            </ul>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="border-t border-border mt-12 pt-8 text-center text-muted-foreground">
          <p>&copy; {new Date().getFullYear()} SabLearn Agents. All rights reserved.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
