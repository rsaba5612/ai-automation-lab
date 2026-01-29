import Header from "@/components/Header";
import Hero from "@/components/Hero";
import Services from "@/components/Services";
import ClientProjects from "@/components/ClientProjects";
import FAQ from "@/components/FAQ";
import Pricing from "@/components/Pricing";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="pt-16">
        <Hero />
        <Services />
        <ClientProjects />
        <Pricing />
        <FAQ />
      </main>
      <Footer />
    </div>
  );
};

export default Index;
