import Link from "next/link"
import { ArrowLeft, MessageSquare, Bot, Cpu } from "lucide-react"
import { Button } from "@/components/ui/button"

export default function AgentsIA() {
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
          <h1 className="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-6">Agents IA Automatisés</h1>

          <div className="prose max-w-none">
            <p className="text-xl text-gray-500 mb-8">
              Conception d'agents IA pour rationaliser la création de contenu, améliorer l'engagement client et
              automatiser les tâches répétitives.
            </p>

            <h2>Révolutionnez votre entreprise avec des agents IA</h2>
            <p>
              Les agents IA représentent la prochaine évolution dans l'automatisation intelligente. Contrairement aux
              systèmes d'automatisation traditionnels, les agents IA peuvent comprendre le contexte, apprendre de leurs
              interactions et prendre des décisions nuancées. Ils peuvent travailler de manière autonome ou en
              collaboration avec vos équipes pour augmenter significativement la productivité.
            </p>

            <h2>Mes services en Agents IA Automatisés</h2>
            <p>
              Je conçois, développe et déploie des agents IA personnalisés qui s'intègrent parfaitement à votre
              infrastructure existante et répondent à vos besoins spécifiques.
            </p>

            <h3>Chatbots et assistants virtuels avancés</h3>
            <p>
              Développement de chatbots intelligents capables de comprendre le langage naturel, de maintenir le contexte
              d'une conversation et de fournir des réponses précises et personnalisées à vos clients ou employés.
            </p>

            <h3>Agents de création de contenu</h3>
            <p>
              Mise en place d'agents IA spécialisés dans la génération de contenu marketing, articles de blog,
              descriptions de produits, ou tout autre type de contenu textuel, avec un ton et un style adaptés à votre
              marque.
            </p>

            <h3>Agents d'automatisation des processus</h3>
            <p>
              Création d'agents capables d'automatiser des workflows complexes, de traiter des documents, d'extraire des
              informations pertinentes et de prendre des décisions basées sur des règles prédéfinies ou sur
              l'apprentissage.
            </p>

            <h3>Agents de recherche et d'analyse</h3>
            <p>
              Développement d'agents spécialisés dans la recherche d'informations, l'analyse de données et la génération
              de rapports personnalisés pour vous aider à prendre des décisions éclairées.
            </p>

            <h2>Technologies utilisées</h2>
            <ul>
              <li>LangChain et LlamaIndex pour l'orchestration d'agents</li>
              <li>OpenAI GPT-4 et Assistants API</li>
              <li>Anthropic Claude</li>
              <li>Google Gemini</li>
              <li>Bases de données vectorielles (Pinecone, Weaviate, etc.)</li>
              <li>Frameworks d'automatisation personnalisés</li>
            </ul>

            <h2>Processus de développement</h2>
            <ol>
              <li>
                <strong>Analyse des besoins</strong> - Identification précise des tâches à automatiser et des objectifs
                à atteindre
              </li>
              <li>
                <strong>Conception</strong> - Élaboration de l'architecture de l'agent et définition de ses capacités
              </li>
              <li>
                <strong>Développement</strong> - Programmation et intégration de l'agent dans votre environnement
              </li>
              <li>
                <strong>Entraînement</strong> - Affinage des capacités de l'agent avec des données spécifiques à votre
                domaine
              </li>
              <li>
                <strong>Tests</strong> - Validation des performances et correction des problèmes
              </li>
              <li>
                <strong>Déploiement</strong> - Mise en production et intégration avec vos systèmes existants
              </li>
              <li>
                <strong>Maintenance</strong> - Suivi des performances et améliorations continues
              </li>
            </ol>
          </div>

          <div className="mt-12 flex flex-col sm:flex-row gap-4">
            <Button className="rounded-full bg-black text-white hover:bg-gray-800">
              Discuter de votre projet d'agent IA
            </Button>
            <Button variant="outline" className="rounded-full">
              Voir des démos
            </Button>
          </div>
        </div>

        <div className="lg:col-span-1">
          <div className="rounded-xl border bg-white p-6 shadow-sm">
            <h3 className="text-xl font-bold mb-4">Applications courantes</h3>
            <div className="space-y-3">
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <MessageSquare className="h-3.5 w-3.5" />
                </div>
                <span>Service client automatisé 24/7</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <Bot className="h-3.5 w-3.5" />
                </div>
                <span>Génération de contenu marketing</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <Cpu className="h-3.5 w-3.5" />
                </div>
                <span>Automatisation des tâches administratives</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <MessageSquare className="h-3.5 w-3.5" />
                </div>
                <span>Assistants personnels pour les employés</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <Bot className="h-3.5 w-3.5" />
                </div>
                <span>Traitement et analyse de documents</span>
              </div>
            </div>

            <div className="mt-8">
              <h3 className="text-xl font-bold mb-4">Services associés</h3>
              <div className="space-y-4">
                <div className="flex items-start gap-3">
                  <div className="rounded-full bg-gray-100 p-2">
                    <Cpu className="h-4 w-4" />
                  </div>
                  <div>
                    <h4 className="font-medium">Intelligence Artificielle</h4>
                    <p className="text-sm text-gray-500">Solutions IA sur mesure pour votre entreprise</p>
                    <Link
                      href="/services/intelligence-artificielle"
                      className="text-sm font-medium text-black inline-flex items-center mt-1"
                    >
                      En savoir plus <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                    </Link>
                  </div>
                </div>
              </div>
            </div>

            <div className="mt-8 p-4 bg-gray-50 rounded-lg">
              <h4 className="font-medium mb-2">Cas d'utilisation réussi</h4>
              <p className="text-sm text-gray-600">
                Un agent IA développé pour une entreprise de e-commerce a permis de réduire le temps de traitement des
                demandes clients de 75%, tout en augmentant le taux de satisfaction de 23%.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
