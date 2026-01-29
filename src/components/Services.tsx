import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Bot, Workflow, Brain, Code2, Rocket, Users } from "lucide-react";

const services = [
  {
    icon: Workflow,
    title: "Make.com Mastery",
    description: "Learn to build powerful automated workflows connecting 1000+ apps. From simple automations to complex multi-step scenarios.",
  },
  {
    icon: Code2,
    title: "n8n Automation",
    description: "Master the open-source automation tool. Self-host your workflows and create custom integrations with full control.",
  },
  {
    icon: Bot,
    title: "AI Agent Development",
    description: "Build intelligent AI agents that can research, analyze, and execute tasks autonomously using cutting-edge frameworks.",
  },
  {
    icon: Brain,
    title: "ChatGPT & AI Integration",
    description: "Integrate OpenAI, Claude, and other AI models into your automations. Create AI-powered solutions for real clients.",
  },
  {
    icon: Rocket,
    title: "Freelancing Blueprint",
    description: "Learn how to find clients, price your services, and deliver professional automation solutions on platforms like Upwork & Fiverr.",
  },
  {
    icon: Users,
    title: "Lifetime Mentorship",
    description: "Get unlimited access to our community, weekly Q&A sessions, and one-on-one guidance whenever you're stuck.",
  },
];

const Services = () => {
  return (
    <section className="py-20 bg-muted/30" id="services">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center mb-16">
          <span className="text-primary font-semibold text-sm uppercase tracking-wider">What You'll Learn</span>
          <h2 className="text-3xl md:text-5xl font-bold mt-4 mb-6">
            Complete <span className="text-primary">Course Modules</span>
          </h2>
          <p className="text-muted-foreground text-lg max-w-2xl mx-auto">
            A comprehensive curriculum designed for beginners to advanced learners. 
            Every module includes hands-on projects and real-world applications.
          </p>
        </div>

        {/* Services Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {services.map((service, index) => (
            <Card 
              key={index} 
              className="group hover:shadow-xl hover:border-primary/50 transition-all duration-300 bg-card"
            >
              <CardHeader>
                <div className="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                  <service.icon className="w-7 h-7 text-primary group-hover:text-primary-foreground" />
                </div>
                <CardTitle className="text-xl">{service.title}</CardTitle>
              </CardHeader>
              <CardContent>
                <CardDescription className="text-base leading-relaxed">
                  {service.description}
                </CardDescription>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;
