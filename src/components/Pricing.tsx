import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Check, Zap, Crown, Star } from "lucide-react";

const Pricing = () => {
  const features = [
    "Complete Make.com & n8n Training",
    "AI Agent Development Modules",
    "ChatGPT & OpenAI Integration",
    "Freelancing Blueprint & Templates",
    "Real Client Project Walkthroughs",
    "Lifetime Access to All Content",
    "Future Course Updates Included",
    "Private Community Access",
    "Weekly Live Q&A Sessions",
    "Lifetime Mentorship Support",
    "Completion Certificate",
    "1-on-1 Support When Stuck",
  ];

  return (
    <section className="py-20 bg-background" id="pricing">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center mb-16">
          <span className="text-primary font-semibold text-sm uppercase tracking-wider">Simple Pricing</span>
          <h2 className="text-3xl md:text-5xl font-bold mt-4 mb-6">
            One Price, <span className="text-primary">Lifetime Value</span>
          </h2>
          <p className="text-muted-foreground text-lg max-w-2xl mx-auto">
            No hidden fees. No monthly subscriptions. Just one investment in your future.
          </p>
        </div>

        {/* Pricing Card */}
        <div className="max-w-lg mx-auto">
          <Card className="relative overflow-hidden border-2 border-primary shadow-2xl">
            {/* Popular Badge */}
            <div className="absolute top-0 right-0">
              <div className="bg-primary text-primary-foreground px-4 py-1 text-sm font-semibold flex items-center gap-1">
                <Crown className="w-4 h-4" />
                Best Value
              </div>
            </div>

            <CardHeader className="text-center pt-10 pb-6">
              <div className="flex items-center justify-center gap-2 mb-4">
                <Star className="w-5 h-5 text-yellow-500 fill-yellow-500" />
                <Star className="w-5 h-5 text-yellow-500 fill-yellow-500" />
                <Star className="w-5 h-5 text-yellow-500 fill-yellow-500" />
                <Star className="w-5 h-5 text-yellow-500 fill-yellow-500" />
                <Star className="w-5 h-5 text-yellow-500 fill-yellow-500" />
              </div>
              <CardTitle className="text-2xl mb-2">Complete Course Bundle</CardTitle>
              <CardDescription className="text-base">
                Everything you need to become an automation expert
              </CardDescription>
              
              {/* Price */}
              <div className="mt-6">
                <div className="flex items-center justify-center gap-2">
                  <span className="text-2xl text-muted-foreground line-through">PKR 25,000</span>
                  <span className="bg-green-100 text-green-700 text-sm font-semibold px-2 py-1 rounded">
                    60% OFF
                  </span>
                </div>
                <div className="flex items-baseline justify-center gap-1 mt-2">
                  <span className="text-5xl md:text-6xl font-bold text-primary">PKR 10,000</span>
                </div>
                <p className="text-muted-foreground mt-2">One-time payment • Lifetime access</p>
              </div>
            </CardHeader>

            <CardContent className="pb-10">
              {/* Features List */}
              <ul className="space-y-3 mb-8">
                {features.map((feature, index) => (
                  <li key={index} className="flex items-start gap-3">
                    <Check className="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" />
                    <span className="text-foreground">{feature}</span>
                  </li>
                ))}
              </ul>

              {/* CTA Button */}
              <Button size="lg" className="w-full text-lg py-6 group">
                <Zap className="w-5 h-5 mr-2" />
                Get Started Today
              </Button>

              {/* Trust Badge */}
              <p className="text-center text-sm text-muted-foreground mt-4">
                ✓ Secure payment • ✓ Instant access • ✓ 7-day money-back guarantee
              </p>
            </CardContent>
          </Card>
        </div>

        {/* Additional Trust Elements */}
        <div className="text-center mt-12">
          <p className="text-muted-foreground">
            Trusted by <span className="font-semibold text-foreground">100+ students</span> across Pakistan
          </p>
        </div>
      </div>
    </section>
  );
};

export default Pricing;
