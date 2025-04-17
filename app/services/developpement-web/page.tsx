import Link from "next/link"
import { ArrowLeft, Code, Globe, Smartphone } from "lucide-react"
import { Button } from "@/components/ui/button"

export default function DeveloppementWeb() {
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
          <h1 className="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-6">Développement Web</h1>

          <div className="prose max-w-none">
            <p className="text-xl text-gray-500 mb-8">
              Création de sites web et d'applications optimisés pour les moteurs de recherche et l'expérience
              utilisateur.
            </p>

            <h2>Un site web performant, votre meilleur atout commercial</h2>
            <p>
              Dans l'environnement numérique actuel, votre site web est souvent le premier point de contact avec vos
              clients potentiels. Un site bien conçu, rapide et facile à utiliser n'est pas seulement une vitrine pour
              votre entreprise, c'est un outil commercial puissant qui peut générer des leads, convertir des visiteurs
              en clients et renforcer votre crédibilité.
            </p>

            <h2>Mes services en Développement Web</h2>
            <p>
              Je propose des solutions de développement web sur mesure, adaptées à vos besoins spécifiques et optimisées
              pour la performance, la sécurité et le référencement.
            </p>

            <h3>Sites vitrines et corporate</h3>
            <p>
              Création de sites web élégants et professionnels qui présentent efficacement votre entreprise, vos
              services et vos valeurs. Chaque site est conçu pour refléter l'identité de votre marque et optimisé pour
              convertir les visiteurs en clients.
            </p>

            <h3>Sites e-commerce</h3>
            <p>
              Développement de boutiques en ligne performantes et sécurisées, avec une expérience d'achat fluide et
              intuitive. Intégration des meilleures solutions de paiement et de gestion des stocks pour faciliter vos
              opérations quotidiennes.
            </p>

            <h3>Applications web sur mesure</h3>
            <p>
              Création d'applications web personnalisées pour répondre à des besoins spécifiques : portails clients,
              systèmes de réservation, plateformes collaboratives, outils de gestion interne, etc.
            </p>

            <h3>Refonte et optimisation</h3>
            <p>
              Amélioration de sites web existants pour augmenter leurs performances, leur sécurité et leur convivialité.
              Optimisation technique pour un meilleur référencement et une expérience utilisateur améliorée.
            </p>

            <h2>Technologies utilisées</h2>
            <ul>
              <li>HTML5, CSS3, JavaScript (ES6+)</li>
              <li>React, Next.js, Vue.js</li>
              <li>WordPress, WooCommerce</li>
              <li>Node.js, Express</li>
              <li>PHP, Laravel</li>
              <li>MongoDB, MySQL, PostgreSQL</li>
              <li>Tailwind CSS, Bootstrap</li>
              <li>API RESTful et GraphQL</li>
            </ul>

            <h2>Processus de développement</h2>
            <ol>
              <li>
                <strong>Analyse des besoins</strong> - Compréhension approfondie de vos objectifs et exigences
              </li>
              <li>
                <strong>Conception UX/UI</strong> - Création de maquettes et de prototypes interactifs
              </li>
              <li>
                <strong>Développement</strong> - Codage et intégration des fonctionnalités
              </li>
              <li>
                <strong>Tests</strong> - Vérification de la qualité, de la compatibilité et de la sécurité
              </li>
              <li>
                <strong>Déploiement</strong> - Mise en ligne et configuration du serveur
              </li>
              <li>
                <strong>Formation</strong> - Accompagnement pour la gestion de votre site
              </li>
              <li>
                <strong>Maintenance</strong> - Support technique et mises à jour régulières
              </li>
            </ol>

            <h2>Avantages de mes services</h2>
            <ul>
              <li>
                <strong>Sites optimisés pour le SEO</strong> - Structure et code optimisés pour un meilleur
                référencement
              </li>
              <li>
                <strong>Performance optimale</strong> - Temps de chargement rapides et expérience fluide
              </li>
              <li>
                <strong>Responsive design</strong> - Adaptation parfaite à tous les appareils
              </li>
              <li>
                <strong>Sécurité renforcée</strong> - Protection contre les vulnérabilités courantes
              </li>
              <li>
                <strong>Accessibilité</strong> - Respect des normes d'accessibilité web
              </li>
              <li>
                <strong>Évolutivité</strong> - Solutions conçues pour évoluer avec votre entreprise
              </li>
            </ul>
          </div>

          <div className="mt-12 flex flex-col sm:flex-row gap-4">
            <Button className="rounded-full bg-black text-white hover:bg-gray-800">Demander un devis</Button>
            <Button variant="outline" className="rounded-full">
              Voir mon portfolio
            </Button>
          </div>
        </div>

        <div className="lg:col-span-1">
          <div className="rounded-xl border bg-white p-6 shadow-sm">
            <h3 className="text-xl font-bold mb-4">Types de projets</h3>
            <div className="space-y-3">
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <Globe className="h-3.5 w-3.5" />
                </div>
                <span>Sites vitrines professionnels</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <Code className="h-3.5 w-3.5" />
                </div>
                <span>Boutiques e-commerce</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <Smartphone className="h-3.5 w-3.5" />
                </div>
                <span>Applications web sur mesure</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <Globe className="h-3.5 w-3.5" />
                </div>
                <span>Blogs et sites de contenu</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <Code className="h-3.5 w-3.5" />
                </div>
                <span>Portails et intranets</span>
              </div>
            </div>

            <div className="mt-8">
              <h3 className="text-xl font-bold mb-4">Services associés</h3>
              <div className="space-y-4">
                <div className="flex items-start gap-3">
                  <div className="rounded-full bg-gray-100 p-2">
                    <Globe className="h-4 w-4" />
                  </div>
                  <div>
                    <h4 className="font-medium">SEO & Référencement</h4>
                    <p className="text-sm text-gray-500">Optimisation pour les moteurs de recherche</p>
                    <Link
                      href="/services/seo-referencement"
                      className="text-sm font-medium text-black inline-flex items-center mt-1"
                    >
                      En savoir plus <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                    </Link>
                  </div>
                </div>
              </div>
            </div>

            <div className="mt-8">
              <h3 className="text-xl font-bold mb-4">Projets récents</h3>
              <div className="space-y-4">
                <div className="rounded-lg border overflow-hidden">
                  <div className="aspect-video bg-gray-100 flex items-center justify-center">
                    <span className="text-sm text-gray-500">Capture d'écran du projet</span>
                  </div>
                  <div className="p-4">
                    <h4 className="font-medium">Site e-commerce Chez Gerry 1958</h4>
                    <p className="text-sm text-gray-500 mt-1">
                      Boutique en ligne pour un service de restauration de chaussures haut de gamme.
                    </p>
                    <Link
                      href="/projets/chez-gerry"
                      className="text-sm font-medium text-black inline-flex items-center mt-2"
                    >
                      Voir le projet <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
