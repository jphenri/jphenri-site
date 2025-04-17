import Link from "next/link"
import { ArrowRight, ChevronRight, Cpu, Globe, LineChart, MessageSquare, Code, Shield } from "lucide-react"
import { Button } from "@/components/ui/button"

export default function Home() {
  return (
    <div className="flex flex-col min-h-screen">
      {/* Hero Section */}
      <section className="w-full py-24 md:py-32 lg:py-40 bg-white">
        <div className="container px-4 md:px-6">
          <div className="flex flex-col items-center space-y-4 text-center">
            <div className="space-y-2">
              <h1 className="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                Intelligence Artificielle & Optimisation Numérique
              </h1>
              <p className="mx-auto max-w-[700px] text-gray-500 md:text-xl">
                Solutions IA avancées pour améliorer votre présence en ligne et optimiser vos stratégies numériques.
              </p>
            </div>
            <div className="space-x-4">
              <Button className="rounded-full bg-black text-white hover:bg-gray-800">
                Découvrir mes services <ArrowRight className="ml-2 h-4 w-4" />
              </Button>
              <Button variant="outline" className="rounded-full">
                Contacter
              </Button>
            </div>
          </div>
        </div>
      </section>

      {/* Services Section */}
      <section className="w-full py-12 md:py-24 lg:py-32 bg-gray-50">
        <div className="container px-4 md:px-6">
          <div className="flex flex-col items-center justify-center space-y-4 text-center">
            <div className="space-y-2">
              <h2 className="text-3xl font-bold tracking-tighter sm:text-5xl">Services</h2>
              <p className="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                Des solutions sur mesure pour optimiser votre présence numérique
              </p>
            </div>
          </div>
          <div className="mx-auto grid max-w-5xl grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 mt-12">
            <div className="flex flex-col items-center space-y-2 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
              <div className="rounded-full bg-gray-100 p-3">
                <Cpu className="h-6 w-6" />
              </div>
              <h3 className="text-xl font-bold">Intelligence Artificielle</h3>
              <p className="text-sm text-gray-500 text-center">
                Intégration d'outils IA avancés comme ChatGPT, xAI et Gemini pour optimiser vos processus.
              </p>
              <Link href="/services/ia" className="inline-flex items-center text-sm font-medium text-black">
                En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
              </Link>
            </div>
            <div className="flex flex-col items-center space-y-2 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
              <div className="rounded-full bg-gray-100 p-3">
                <Globe className="h-6 w-6" />
              </div>
              <h3 className="text-xl font-bold">SEO & Référencement</h3>
              <p className="text-sm text-gray-500 text-center">
                Optimisation du référencement naturel pour améliorer votre visibilité en ligne.
              </p>
              <Link href="/services/seo" className="inline-flex items-center text-sm font-medium text-black">
                En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
              </Link>
            </div>
            <div className="flex flex-col items-center space-y-2 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
              <div className="rounded-full bg-gray-100 p-3">
                <LineChart className="h-6 w-6" />
              </div>
              <h3 className="text-xl font-bold">Analyse de Données</h3>
              <p className="text-sm text-gray-500 text-center">
                Analyses basées sur les données pour surveiller les indicateurs de performance et affiner les
                stratégies.
              </p>
              <Link href="/services/analyse" className="inline-flex items-center text-sm font-medium text-black">
                En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
              </Link>
            </div>
            <div className="flex flex-col items-center space-y-2 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
              <div className="rounded-full bg-gray-100 p-3">
                <MessageSquare className="h-6 w-6" />
              </div>
              <h3 className="text-xl font-bold">Agents IA Automatisés</h3>
              <p className="text-sm text-gray-500 text-center">
                Conception d'agents IA pour rationaliser la création de contenu et l'engagement client.
              </p>
              <Link href="/services/agents" className="inline-flex items-center text-sm font-medium text-black">
                En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
              </Link>
            </div>
            <div className="flex flex-col items-center space-y-2 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
              <div className="rounded-full bg-gray-100 p-3">
                <Code className="h-6 w-6" />
              </div>
              <h3 className="text-xl font-bold">Développement Web</h3>
              <p className="text-sm text-gray-500 text-center">
                Création de sites web et d'applications optimisés pour les moteurs de recherche et l'expérience
                utilisateur.
              </p>
              <Link href="/services/developpement" className="inline-flex items-center text-sm font-medium text-black">
                En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
              </Link>
            </div>
            <div className="flex flex-col items-center space-y-2 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
              <div className="rounded-full bg-gray-100 p-3">
                <Shield className="h-6 w-6" />
              </div>
              <h3 className="text-xl font-bold">Cybersécurité</h3>
              <p className="text-sm text-gray-500 text-center">
                Protection de vos données et systèmes contre les menaces informatiques avec des solutions avancées.
              </p>
              <Link href="/services/securite" className="inline-flex items-center text-sm font-medium text-black">
                En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
              </Link>
            </div>
          </div>
        </div>
      </section>

      {/* About Section */}
      <section className="w-full py-12 md:py-24 lg:py-32 bg-white">
        <div className="container px-4 md:px-6">
          <div className="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
            <div className="space-y-4">
              <h2 className="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">À propos</h2>
              <p className="text-gray-500 md:text-xl">
                Professionnel en IT et consultant en IA depuis 2015, basé à Gatineau, Québec.
              </p>
              <div className="space-y-2">
                <p className="text-gray-500">
                  Je suis un professionnel en IT et chef de projet avec une solide expérience en gestion de systèmes. Au
                  fil des années, j'ai dirigé de nombreux projets, coordonnant le déploiement et la gestion de flottes
                  informatiques complètes à travers le Canada.
                </p>
                <p className="text-gray-500">
                  Passionné par les dernières avancées en IA, cybersécurité et Linux, mon objectif est de continuer à
                  apprendre et à me perfectionner dans mon domaine pour offrir les meilleures solutions à mes clients.
                </p>
              </div>
              <div>
                <Button className="rounded-full bg-black text-white hover:bg-gray-800">Mon parcours complet</Button>
              </div>
            </div>
            <div className="flex justify-center">
              <div className="relative h-[400px] w-[400px] overflow-hidden rounded-xl bg-gray-100">
                <div className="absolute inset-0 flex items-center justify-center text-gray-500">
                  <span className="text-sm">Votre photo professionnelle</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Projects Section */}
      <section className="w-full py-12 md:py-24 lg:py-32 bg-gray-50">
        <div className="container px-4 md:px-6">
          <div className="flex flex-col items-center justify-center space-y-4 text-center">
            <div className="space-y-2">
              <h2 className="text-3xl font-bold tracking-tighter sm:text-5xl">Projets</h2>
              <p className="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                Découvrez quelques-uns de mes projets récents
              </p>
            </div>
          </div>
          <div className="mx-auto grid max-w-5xl grid-cols-1 gap-6 md:grid-cols-2 mt-12">
            <div className="group flex flex-col rounded-lg border overflow-hidden bg-white shadow-sm transition-all hover:shadow-md">
              <div className="aspect-video w-full overflow-hidden bg-gray-100">
                <div className="h-full w-full flex items-center justify-center text-gray-500">
                  <span className="text-sm">Image du projet Chez Gerry 1958</span>
                </div>
              </div>
              <div className="flex flex-col space-y-2 p-4">
                <h3 className="text-xl font-bold">Chez Gerry 1958</h3>
                <p className="text-gray-500">
                  Site dédié aux services de restauration de chaussures, spécialisé dans les chaussures en cuir Goodyear
                  welt. J'ai conçu une interface intuitive, optimisé le référencement et implémenté des passerelles de
                  paiement sécurisées.
                </p>
                <div className="pt-2">
                  <h4 className="text-sm font-semibold">Caractéristiques clés:</h4>
                  <ul className="list-disc pl-5 text-sm text-gray-500 mt-1">
                    <li>Interface utilisateur intuitive</li>
                    <li>Optimisation SEO</li>
                    <li>Mesures de sécurité robustes</li>
                  </ul>
                </div>
                <Link
                  href="/projets/chez-gerry"
                  className="inline-flex items-center text-sm font-medium text-black mt-2"
                >
                  Voir le projet <ChevronRight className="ml-1 h-4 w-4" />
                </Link>
              </div>
            </div>
            <div className="group flex flex-col rounded-lg border overflow-hidden bg-white shadow-sm transition-all hover:shadow-md">
              <div className="aspect-video w-full overflow-hidden bg-gray-100">
                <div className="h-full w-full flex items-center justify-center text-gray-500">
                  <span className="text-sm">Image du projet Pronatureqc.com</span>
                </div>
              </div>
              <div className="flex flex-col space-y-2 p-4">
                <h3 className="text-xl font-bold">Pronatureqc.com (2015-2018)</h3>
                <p className="text-gray-500">
                  Plateforme e-commerce développée et optimisée pour la vente de produits de plein air et de chasse. Le
                  projet a impliqué la construction d'un site convivial, l'optimisation du référencement et
                  l'implémentation de systèmes de paiement sécurisés.
                </p>
                <div className="pt-2">
                  <h4 className="text-sm font-semibold">Caractéristiques clés:</h4>
                  <ul className="list-disc pl-5 text-sm text-gray-500 mt-1">
                    <li>Plateforme e-commerce complète</li>
                    <li>Optimisation pour les moteurs de recherche</li>
                    <li>Expérience utilisateur intuitive</li>
                  </ul>
                </div>
                <Link
                  href="/projets/pronatureqc"
                  className="inline-flex items-center text-sm font-medium text-black mt-2"
                >
                  Voir le projet <ChevronRight className="ml-1 h-4 w-4" />
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Blog Section */}
      <section className="w-full py-12 md:py-24 lg:py-32 bg-white">
        <div className="container px-4 md:px-6">
          <div className="flex flex-col items-center justify-center space-y-4 text-center">
            <div className="space-y-2">
              <h2 className="text-3xl font-bold tracking-tighter sm:text-5xl">Blog</h2>
              <p className="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                Découvrez mes derniers articles sur l'IA et l'optimisation numérique
              </p>
            </div>
          </div>
          <div className="mx-auto grid max-w-5xl grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 mt-12">
            {[1, 2, 3].map((i) => (
              <div
                key={i}
                className="group flex flex-col rounded-lg border overflow-hidden bg-white shadow-sm transition-all hover:shadow-md"
              >
                <div className="aspect-video w-full overflow-hidden bg-gray-100">
                  <div className="h-full w-full flex items-center justify-center text-gray-500">
                    <span className="text-sm">Image de l'article {i}</span>
                  </div>
                </div>
                <div className="flex flex-col space-y-2 p-4">
                  <p className="text-sm text-gray-500">12 Mai 2024</p>
                  <h3 className="text-xl font-bold">Comment l'IA révolutionne le marketing digital</h3>
                  <p className="text-gray-500 line-clamp-2">
                    Découvrez comment les outils d'intelligence artificielle transforment les stratégies de marketing
                    numérique.
                  </p>
                  <Link href={`/blog/article-${i}`} className="inline-flex items-center text-sm font-medium text-black">
                    Lire l'article <ChevronRight className="ml-1 h-4 w-4" />
                  </Link>
                </div>
              </div>
            ))}
          </div>
          <div className="flex justify-center mt-8">
            <Button variant="outline" className="rounded-full">
              Voir tous les articles
            </Button>
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section className="w-full py-12 md:py-24 lg:py-32 bg-gray-50">
        <div className="container px-4 md:px-6">
          <div className="flex flex-col items-center justify-center space-y-4 text-center">
            <div className="space-y-2">
              <h2 className="text-3xl font-bold tracking-tighter sm:text-5xl">Contact</h2>
              <p className="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                Prêt à transformer votre présence numérique? Contactez-moi dès aujourd'hui.
              </p>
            </div>
            <div className="w-full max-w-md space-y-4">
              <form className="space-y-4">
                <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <div className="space-y-2">
                    <label
                      htmlFor="name"
                      className="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-left block"
                    >
                      Nom
                    </label>
                    <input
                      id="name"
                      className="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                      placeholder="Votre nom"
                    />
                  </div>
                  <div className="space-y-2">
                    <label
                      htmlFor="email"
                      className="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-left block"
                    >
                      Email
                    </label>
                    <input
                      id="email"
                      type="email"
                      className="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                      placeholder="Votre email"
                    />
                  </div>
                </div>
                <div className="space-y-2">
                  <label
                    htmlFor="message"
                    className="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-left block"
                  >
                    Message
                  </label>
                  <textarea
                    id="message"
                    className="flex min-h-[120px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    placeholder="Votre message"
                  />
                </div>
                <Button className="w-full rounded-full bg-black text-white hover:bg-gray-800">Envoyer</Button>
              </form>
            </div>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="w-full py-6 bg-gray-50 border-t">
        <div className="container px-4 md:px-6">
          <div className="flex flex-col items-center justify-center space-y-4 text-center">
            <div className="space-y-2">
              <p className="text-sm text-gray-500">
                © 2024 jphenri.com | Consultant en IA et Spécialiste en Optimisation Numérique. Tous droits réservés.
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  )
}
