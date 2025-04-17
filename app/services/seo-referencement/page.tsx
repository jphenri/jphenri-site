import Link from "next/link"
import { ArrowLeft, Search, BarChart } from "lucide-react"
import { Button } from "@/components/ui/button"

export default function SEOReferencement() {
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
          <h1 className="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-6">SEO & Référencement</h1>

          <div className="prose max-w-none">
            <p className="text-xl text-gray-500 mb-8">
              Optimisation du référencement naturel pour améliorer votre visibilité en ligne et attirer un trafic
              qualifié.
            </p>

            <h2>Pourquoi le SEO est essentiel pour votre entreprise</h2>
            <p>
              Le référencement naturel (SEO) est l'un des piliers d'une stratégie digitale efficace. Il vous permet
              d'être visible auprès de votre audience cible au moment précis où elle recherche vos produits ou services.
              Contrairement aux publicités payantes, le SEO génère un trafic organique durable et offre un excellent
              retour sur investissement à long terme.
            </p>

            <h2>Mes services en SEO & Référencement</h2>
            <p>
              Je propose une approche holistique du référencement, combinant expertise technique, création de contenu
              stratégique et analyse de données pour maximiser votre visibilité en ligne.
            </p>

            <h3>Audit SEO complet</h3>
            <p>
              Analyse approfondie de votre site web pour identifier les opportunités d'amélioration et les obstacles
              techniques qui peuvent limiter votre visibilité dans les moteurs de recherche.
            </p>

            <h3>Optimisation on-page</h3>
            <p>
              Optimisation des éléments clés de votre site (méta-données, structure, contenu, vitesse de chargement,
              expérience mobile) pour améliorer votre positionnement dans les résultats de recherche.
            </p>

            <h3>Stratégie de contenu SEO</h3>
            <p>
              Développement d'une stratégie de contenu basée sur les recherches de mots-clés et l'intention de
              l'utilisateur, pour attirer un trafic qualifié et répondre aux besoins de votre audience.
            </p>

            <h3>SEO local</h3>
            <p>
              Optimisation de votre présence en ligne pour les recherches locales, incluant la gestion de votre fiche
              Google Business Profile et l'optimisation pour les requêtes géolocalisées.
            </p>

            <h3>SEO technique</h3>
            <p>
              Résolution des problèmes techniques qui peuvent affecter l'indexation et le classement de votre site
              (vitesse, structure, balisage schema, etc.).
            </p>

            <h2>Méthodologie</h2>
            <ol>
              <li>
                <strong>Analyse</strong> - Audit complet de votre site et de votre présence en ligne
              </li>
              <li>
                <strong>Recherche</strong> - Identification des mots-clés stratégiques et analyse de la concurrence
              </li>
              <li>
                <strong>Optimisation</strong> - Mise en œuvre des recommandations techniques et on-page
              </li>
              <li>
                <strong>Contenu</strong> - Création et optimisation de contenu pertinent et engageant
              </li>
              <li>
                <strong>Suivi</strong> - Monitoring des performances et ajustements continus
              </li>
            </ol>

            <h2>Outils utilisés</h2>
            <ul>
              <li>Google Search Console & Google Analytics</li>
              <li>Semrush</li>
              <li>Ahrefs</li>
              <li>Screaming Frog</li>
              <li>PageSpeed Insights</li>
              <li>Outils d'analyse IA propriétaires</li>
            </ul>
          </div>

          <div className="mt-12 flex flex-col sm:flex-row gap-4">
            <Button className="rounded-full bg-black text-white hover:bg-gray-800">
              Demander un audit SEO gratuit
            </Button>
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
                  <Search className="h-4 w-4" />
                </div>
                <div>
                  <h4 className="font-medium">Marketing de contenu</h4>
                  <p className="text-sm text-gray-500">Stratégies de contenu optimisées pour le SEO</p>
                  <Link
                    href="/services/marketing-contenu"
                    className="text-sm font-medium text-black inline-flex items-center mt-1"
                  >
                    En savoir plus <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                  </Link>
                </div>
              </div>

              <div className="flex items-start gap-3">
                <div className="rounded-full bg-gray-100 p-2">
                  <BarChart className="h-4 w-4" />
                </div>
                <div>
                  <h4 className="font-medium">Analyse de données</h4>
                  <p className="text-sm text-gray-500">Suivi et analyse des performances SEO</p>
                  <Link
                    href="/services/analyse-donnees"
                    className="text-sm font-medium text-black inline-flex items-center mt-1"
                  >
                    En savoir plus <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                  </Link>
                </div>
              </div>
            </div>

            <div className="mt-8">
              <h3 className="text-xl font-bold mb-4">Résultats obtenus</h3>
              <div className="space-y-4">
                <div className="rounded-lg bg-gray-50 p-4">
                  <div className="text-3xl font-bold text-black">+187%</div>
                  <p className="text-sm text-gray-500">
                    Augmentation du trafic organique pour un client e-commerce en 6 mois
                  </p>
                </div>

                <div className="rounded-lg bg-gray-50 p-4">
                  <div className="text-3xl font-bold text-black">Top 3</div>
                  <p className="text-sm text-gray-500">
                    Positionnement pour 28 mots-clés stratégiques dans un secteur compétitif
                  </p>
                </div>

                <div className="rounded-lg bg-gray-50 p-4">
                  <div className="text-3xl font-bold text-black">+43%</div>
                  <p className="text-sm text-gray-500">Augmentation du taux de conversion des visiteurs organiques</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
