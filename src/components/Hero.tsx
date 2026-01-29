import { Button } from "@/components/ui/button";
import { ArrowRight, Bot, Zap, Users } from "lucide-react";

const Hero = () => {
  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-background via-background to-primary/5">
      {/* Animated background elements */}
      <div className="absolute inset-0 overflow-hidden">
        <div className="absolute top-20 left-10 w-72 h-72 bg-primary/10 rounded-full blur-3xl animate-pulse" />
        <div className="absolute bottom-20 right-10 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-pulse delay-1000" />
      </div>

      <div className="container mx-auto px-4 py-20 relative z-10">
        <div className="text-center max-w-4xl mx-auto">
          {/* Badge */}
          <div className="inline-flex items-center gap-2 bg-primary/10 border border-primary/20 rounded-full px-4 py-2 mb-8">
            <Zap className="w-4 h-4 text-primary" />
            <span className="text-sm font-medium text-primary">100% Practical Learning</span>
          </div>

          {/* Main Heading */}
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
            Master <span className="text-primary">AI Agents</span> &
            <br />
            <span className="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">
              No-Code Automation
            </span>
          </h1>

          {/* Subheading */}
          <p className="text-lg md:text-xl text-muted-foreground mb-8 max-w-2xl mx-auto">
            Learn Make.com, n8n, and AI Agent frameworks from scratch. Build real-world automation 
            solutions and start your freelancing journey with <strong>Lifetime Mentorship</strong>.
          </p>

          {/* Stats */}
          <div className="flex flex-wrap justify-center gap-8 mb-10">
            <div className="flex items-center gap-2">
              <Bot className="w-5 h-5 text-primary" />
              <span className="text-muted-foreground">AI Agent Frameworks</span>
            </div>
            <div className="flex items-center gap-2">
              <Zap className="w-5 h-5 text-primary" />
              <span className="text-muted-foreground">Make.com & n8n</span>
            </div>
            <div className="flex items-center gap-2">
              <Users className="w-5 h-5 text-primary" />
              <span className="text-muted-foreground">Lifetime Support</span>
            </div>
          </div>

          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button size="lg" className="text-lg px-8 py-6 group">
              View Our Projects
              <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
            </Button>
            <Button size="lg" variant="outline" className="text-lg px-8 py-6">
              Learn More
            </Button>
          </div>

          {/* Price Tag */}
          <div className="mt-12 inline-flex items-center gap-3 bg-card border border-border rounded-2xl px-6 py-4 shadow-lg">
            <span className="text-muted-foreground">Starting at just</span>
            <span className="text-3xl font-bold text-primary">PKR 10,000</span>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
