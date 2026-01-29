import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { CheckCircle2, ExternalLink } from "lucide-react";

const projects = [
  {
    title: "E-Commerce Order Automation",
    client: "Fashion Brand - UAE",
    description: "Automated order processing, inventory sync, and customer notifications across Shopify, WhatsApp, and Google Sheets.",
    tools: ["Make.com", "Shopify", "WhatsApp API"],
    results: "Saved 20+ hours/week",
  },
  {
    title: "Lead Generation AI Agent",
    client: "Real Estate Agency",
    description: "Built an AI agent that scrapes leads, qualifies them using GPT-4, and automatically adds qualified leads to CRM.",
    tools: ["n8n", "OpenAI", "HubSpot"],
    results: "300% more qualified leads",
  },
  {
    title: "Content Scheduling System",
    client: "Digital Marketing Agency",
    description: "Created automated content pipeline from ideation to publishing across multiple social media platforms.",
    tools: ["Make.com", "Notion", "Buffer"],
    results: "50+ posts automated/month",
  },
  {
    title: "Invoice & Payment Automation",
    client: "Consulting Firm - UK",
    description: "End-to-end invoicing system with automatic payment reminders, receipt generation, and accounting sync.",
    tools: ["n8n", "Stripe", "QuickBooks"],
    results: "Zero manual invoicing",
  },
  {
    title: "Customer Support AI Bot",
    client: "SaaS Startup",
    description: "Deployed an AI-powered chatbot handling 80% of customer queries with seamless human handoff.",
    tools: ["AI Agent", "Intercom", "Slack"],
    results: "80% faster response time",
  },
  {
    title: "HR Onboarding Workflow",
    client: "Tech Company - Pakistan",
    description: "Automated complete employee onboarding from document collection to tool access provisioning.",
    tools: ["Make.com", "Google Workspace", "Notion"],
    results: "Onboarding in 10 mins vs 2 days",
  },
];

const ClientProjects = () => {
  return (
    <section className="py-20 bg-background" id="projects">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center mb-16">
          <span className="text-primary font-semibold text-sm uppercase tracking-wider">Real Results</span>
          <h2 className="text-3xl md:text-5xl font-bold mt-4 mb-6">
            Client <span className="text-primary">Projects</span> We've Delivered
          </h2>
          <p className="text-muted-foreground text-lg max-w-2xl mx-auto">
            These are real automation solutions we've built for clients worldwide. 
            You'll learn to create similar projects in this course.
          </p>
        </div>

        {/* Projects Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {projects.map((project, index) => (
            <Card 
              key={index} 
              className="group hover:shadow-xl hover:border-primary/50 transition-all duration-300 overflow-hidden"
            >
              <CardHeader className="pb-4">
                <div className="flex items-start justify-between mb-2">
                  <Badge variant="secondary" className="text-xs">
                    {project.client}
                  </Badge>
                  <ExternalLink className="w-4 h-4 text-muted-foreground opacity-0 group-hover:opacity-100 transition-opacity" />
                </div>
                <CardTitle className="text-lg leading-tight">{project.title}</CardTitle>
              </CardHeader>
              <CardContent className="space-y-4">
                <CardDescription className="text-sm leading-relaxed">
                  {project.description}
                </CardDescription>
                
                {/* Tools Used */}
                <div className="flex flex-wrap gap-2">
                  {project.tools.map((tool, i) => (
                    <span 
                      key={i}
                      className="text-xs bg-primary/10 text-primary px-2 py-1 rounded-full"
                    >
                      {tool}
                    </span>
                  ))}
                </div>

                {/* Results */}
                <div className="flex items-center gap-2 pt-2 border-t border-border">
                  <CheckCircle2 className="w-4 h-4 text-green-500" />
                  <span className="text-sm font-medium text-green-600">{project.results}</span>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};

export default ClientProjects;
