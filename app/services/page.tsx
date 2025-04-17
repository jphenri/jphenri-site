import Link from "next/link"
import { ChevronRight, Cpu, Globe, LineChart, MessageSquare, Code, Shield } from "lucide-react"

export default function ServicesPage() {
  return (
    <div className="container px-4 py-12 md:px-6 md:py-24">
      <div className="flex flex-col items-center justify-center space-y-4 text-center">
        <div className="space-y-2">
          <h1 className="text-3xl font-bold tracking-tighter sm:text-5xl">Nos Services</h1>
          <p className="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
            Des solutions sur mesure pour optimiser votre présence numérique et transformer votre entreprise
          </p>
        </div>
      </div>

      <div className="mx-auto grid max-w-5xl grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 mt-16">
        <div className="flex flex-col items-center space-y-4 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
          <div className="rounded-full bg-gray-100 p-3">
            <Cpu className="h-6 w-6" />
          </div>
          <h2 className="text-xl font-bold">Intelligence Artificielle</h2>
          <p className="text-sm text-gray-500 text-center">
            Intégration d'outils IA avancés comme ChatGPT, xAI et Gemini pour optimiser vos processus.
          </p>
          <Link
            href="/services/intelligence-artificielle"
            className="inline-flex items-center text-sm font-medium text-black"
          >
            En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
          </Link>
        </div>

        <div className="flex flex-col items-center space-y-4 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
          <div className="rounded-full bg-gray-100 p-3">
            <Globe className="h-6 w-6" />
          </div>
          <h2 className="text-xl font-bold">SEO & Référencement</h2>
          <p className="text-sm text-gray-500 text-center">
            Optimisation du référencement naturel pour améliorer votre visibilité en ligne.
          </p>
          <Link href="/services/seo-referencement" className="inline-flex items-center text-sm font-medium text-black">
            En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
          </Link>
        </div>

        <div className="flex flex-col items-center space-y-4 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
          <div className="rounded-full bg-gray-100 p-3">
            <LineChart className="h-6 w-6" />
          </div>
          <h2 className="text-xl font-bold">Analyse de Données</h2>
          <p className="text-sm text-gray-500 text-center">
            Analyses basées sur les données pour surveiller les indicateurs de performance et affiner les stratégies.
          </p>
          <Link href="/services/analyse-donnees" className="inline-flex items-center text-sm font-medium text-black">
            En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
          </Link>
        </div>

        <div className="flex flex-col items-center space-y-4 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
          <div className="rounded-full bg-gray-100 p-3">
            <MessageSquare className="h-6 w-6" />
          </div>
          <h2 className="text-xl font-bold">Agents IA Automatisés</h2>
          <p className="text-sm text-gray-500 text-center">
            Conception d'agents IA pour rationaliser la création de contenu et l'engagement client.
          </p>
          <Link href="/services/agents-ia" className="inline-flex items-center text-sm font-medium text-black">
            En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
          </Link>
        </div>

        <div className="flex flex-col items-center space-y-4 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
          <div className="rounded-full bg-gray-100 p-3">
            <Code className="h-6 w-6" />
          </div>
          <h2 className="text-xl font-bold">Développement Web</h2>
          <p className="text-sm text-gray-500 text-center">
            Création de sites web et d'applications optimisés pour les moteurs de recherche et l'expérience utilisateur.
          </p>
          <Link href="/services/developpement-web" className="inline-flex items-center text-sm font-medium text-black">
            En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
          </Link>
        </div>

        <div className="flex flex-col items-center space-y-4 rounded-lg border p-6 bg-white shadow-sm transition-all hover:shadow-md">
          <div className="rounded-full bg-gray-100 p-3">
            <Shield className="h-6 w-6" />
          </div>
          <h2 className="text-xl font-bold">Cybersécurité</h2>
          <p className="text-sm text-gray-500 text-center">
            Protection de vos données et systèmes contre les menaces informatiques avec des solutions avancées.
          </p>
          <Link href="/services/cybersecurite" className="inline-flex items-center text-sm font-medium text-black">
            En savoir plus <ChevronRight className="ml-1 h-4 w-4" />
          </Link>
        </div>
      </div>
    </div>
  )
}
