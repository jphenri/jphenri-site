import Link from "next/link"
import { ArrowLeft, MessageSquare, Bot } from "lucide-react"
import { Button } from "@/components/ui/button"

export default function IntelligenceArtificielle() {
  return (
    <div className="container px-4 py-12 md:px-6 md:py-24">
      <Link
        href="/services"
        className="inline-flex items-center text-sm font-medium mb-6 text-gray-500 hover:text-black"
      >
        <ArrowLeft className="mr-2 h-4 w-4" />
        Retour aux services
      </Link>

      <div className="grid gap-12 lg:grid-cols-3">
        <div className="lg:col-span-2">
          <h1 className="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-6">
            Intelligence Artificielle
          </h1>

          <div className="prose max-w-none">
            <p className="text-xl text-gray-500 mb-8">
              Intégration d'outils IA avancés comme ChatGPT, xAI et Gemini pour optimiser vos processus et transformer
              votre entreprise.
            </p>

            <h2>Comment l'IA peut transformer votre entreprise</h2>
            <p>
              L'intelligence artificielle n'est plus réservée aux grandes entreprises technologiques. Aujourd'hui, des
              organisations de toutes tailles peuvent tirer parti des avancées en IA pour automatiser des tâches,
              obtenir des insights précieux à partir de leurs données et offrir des expériences client personnalisées.
            </p>

            <h2>Mes services en Intelligence Artificielle</h2>
            <p>
              En tant que consultant spécialisé en IA, je vous accompagne dans l'intégration de solutions d'intelligence
              artificielle adaptées à vos besoins spécifiques. Mon approche est pragmatique et orientée résultats, avec
              un focus sur le ROI et la création de valeur réelle pour votre entreprise.
            </p>

            <h3>Intégration de modèles de langage avancés</h3>
            <p>
              Les modèles comme GPT-4, Claude, Gemini et xAI offrent des capacités impressionnantes pour traiter et
              générer du langage naturel. Je vous aide à les intégrer dans vos workflows pour automatiser la rédaction,
              l'analyse de documents, le service client et bien plus encore.
            </p>

            <h3>Développement d'agents IA personnalisés</h3>
            <p>
              Je conçois et développe des agents IA sur mesure qui peuvent automatiser des tâches spécifiques à votre
              entreprise, interagir avec vos clients ou assister vos employés dans leurs tâches quotidiennes.
            </p>

            <h3>Analyse prédictive et insights basés sur les données</h3>
            <p>
              Exploitez la puissance de vos données grâce à des modèles d'IA qui peuvent identifier des tendances,
              prédire des comportements et vous aider à prendre des décisions plus éclairées.
            </p>

            <h2>Technologies et outils</h2>
            <ul>
              <li>OpenAI (GPT-4, DALL-E)</li>
              <li>Google Gemini</li>
              <li>xAI (Grok)</li>
              <li>Anthropic Claude</li>
              <li>Hugging Face (modèles open-source)</li>
              <li>LangChain et LlamaIndex pour l'orchestration d'agents</li>
              <li>Vector databases (Pinecone, Weaviate, etc.)</li>
            </ul>

            <h2>Processus de travail</h2>
            <ol>
              <li>
                <strong>Évaluation</strong> - Analyse de vos besoins et identification des opportunités d'intégration
                d'IA
              </li>
              <li>
                <strong>Stratégie</strong> - Élaboration d'une feuille de route pour l'implémentation des solutions IA
              </li>
              <li>
                <strong>Développement</strong> - Création et intégration des solutions IA dans vos systèmes existants
              </li>
              <li>
                <strong>Formation</strong> - Accompagnement de vos équipes pour une adoption réussie
              </li>
              <li>
                <strong>Optimisation</strong> - Amélioration continue basée sur les retours d'utilisation et les
                nouvelles avancées technologiques
              </li>
            </ol>
          </div>

          <div className="mt-12 flex flex-col sm:flex-row gap-4">
            <Button className="rounded-full bg-black text-white hover:bg-gray-800">Demander un devis</Button>
            <Button variant="outline" className="rounded-full">
              Prendre rendez-vous
            </Button>
          </div>
        </div>

        <div className="lg:col-span-1">
          <div className="rounded-xl border bg-white p-6 shadow-sm">
            <h3 className="text-xl font-bold mb-4">Services associés</h3>
            <div className="space-y-4">
              <div className="flex items-start gap-3">
                <div className="rounded-full bg-gray-100 p-2">
                  <MessageSquare className="h-4 w-4" />
                </div>
                <div>
                  <h4 className="font-medium">Agents IA Automatisés</h4>
                  <p className="text-sm text-gray-500">Création d'assistants virtuels et d'agents conversationnels</p>
                  <Link
                    href="/services/agents-ia"
                    className="text-sm font-medium text-black inline-flex items-center mt-1"
                  >
                    En savoir plus <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                  </Link>
                </div>
              </div>

              <div className="flex items-start gap-3">
                <div className="rounded-full bg-gray-100 p-2">
                  <Bot className="h-4 w-4" />
                </div>
                <div>
                  <h4 className="font-medium">Automatisation des processus</h4>
                  <p className="text-sm text-gray-500">Optimisation des workflows grâce à l'IA</p>
                  <Link
                    href="/services/automatisation"
                    className="text-sm font-medium text-black inline-flex items-center mt-1"
                  >
                    En savoir plus <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                  </Link>
                </div>
              </div>
            </div>

            <div className="mt-8">
              <h3 className="text-xl font-bold mb-4">Témoignages</h3>
              <div className="space-y-4">
                <blockquote className="border-l-2 pl-4 italic text-gray-600">
                  "L'intégration de ChatGPT dans notre service client a réduit notre temps de réponse de 60% tout en
                  améliorant la satisfaction client."
                  <footer className="text-sm font-medium mt-2">— Marie D., Directrice Marketing</footer>
                </blockquote>

                <blockquote className="border-l-2 pl-4 italic text-gray-600">
                  "Jean-Philippe nous a aidés à mettre en place un système d'analyse prédictive qui a transformé notre
                  approche commerciale."
                  <footer className="text-sm font-medium mt-2">— Thomas L., CEO</footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
