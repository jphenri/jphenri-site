import Link from "next/link"
import { ArrowLeft, PieChart, BarChart3 } from "lucide-react"
import { Button } from "@/components/ui/button"

export default function AnalyseDonnees() {
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
          <h1 className="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-6">Analyse de Données</h1>

          <div className="prose max-w-none">
            <p className="text-xl text-gray-500 mb-8">
              Analyses basées sur les données pour surveiller les indicateurs de performance et affiner les stratégies
              commerciales et marketing.
            </p>

            <h2>Transformez vos données en insights actionnables</h2>
            <p>
              Dans l'économie numérique actuelle, les données sont l'un des actifs les plus précieux d'une entreprise.
              Cependant, posséder des données n'est que la première étape. La véritable valeur réside dans votre
              capacité à les analyser efficacement pour en extraire des insights qui guideront vos décisions
              stratégiques.
            </p>

            <h2>Mes services en Analyse de Données</h2>
            <p>
              Je vous aide à mettre en place des systèmes d'analyse de données robustes et à extraire des insights
              pertinents qui vous permettront d'optimiser vos performances et de prendre des décisions éclairées.
            </p>

            <h3>Mise en place de tableaux de bord analytiques</h3>
            <p>
              Création de tableaux de bord personnalisés qui regroupent vos KPIs les plus importants et vous permettent
              de suivre vos performances en temps réel.
            </p>

            <h3>Analyse prédictive</h3>
            <p>
              Utilisation de modèles statistiques et d'algorithmes d'apprentissage automatique pour identifier des
              tendances et prédire des comportements futurs.
            </p>

            <h3>Segmentation client</h3>
            <p>
              Analyse approfondie de votre base de clients pour identifier des segments distincts et personnaliser vos
              stratégies marketing et commerciales.
            </p>

            <h3>Optimisation de la conversion</h3>
            <p>
              Analyse du parcours utilisateur et identification des points de friction pour améliorer vos taux de
              conversion.
            </p>

            <h3>Reporting automatisé</h3>
            <p>
              Mise en place de systèmes de reporting automatisés qui vous fournissent régulièrement les informations
              dont vous avez besoin sans intervention manuelle.
            </p>

            <h2>Technologies et outils</h2>
            <ul>
              <li>Google Analytics 4</li>
              <li>Google Data Studio / Looker Studio</li>
              <li>Tableau</li>
              <li>Power BI</li>
              <li>Python (pandas, scikit-learn, TensorFlow)</li>
              <li>R pour l'analyse statistique</li>
              <li>SQL pour l'interrogation de bases de données</li>
              <li>Outils d'analyse IA avancés</li>
            </ul>

            <h2>Processus d'analyse</h2>
            <ol>
              <li>
                <strong>Définition des objectifs</strong> - Identification claire des questions commerciales auxquelles
                vous cherchez à répondre
              </li>
              <li>
                <strong>Collecte et préparation des données</strong> - Rassemblement et nettoyage des données
                pertinentes
              </li>
              <li>
                <strong>Exploration et analyse</strong> - Application de techniques statistiques et d'apprentissage
                automatique
              </li>
              <li>
                <strong>Visualisation</strong> - Présentation des résultats de manière claire et intuitive
              </li>
              <li>
                <strong>Recommandations</strong> - Transformation des insights en actions concrètes
              </li>
              <li>
                <strong>Implémentation et suivi</strong> - Mise en œuvre des recommandations et mesure des résultats
              </li>
            </ol>
          </div>

          <div className="mt-12 flex flex-col sm:flex-row gap-4">
            <Button className="rounded-full bg-black text-white hover:bg-gray-800">Demander une consultation</Button>
            <Button variant="outline" className="rounded-full">
              Voir des exemples de tableaux de bord
            </Button>
          </div>
        </div>

        <div className="lg:col-span-1">
          <div className="rounded-xl border bg-white p-6 shadow-sm">
            <h3 className="text-xl font-bold mb-4">Services associés</h3>
            <div className="space-y-4">
              <div className="flex items-start gap-3">
                <div className="rounded-full bg-gray-100 p-2">
                  <PieChart className="h-4 w-4" />
                </div>
                <div>
                  <h4 className="font-medium">Intelligence d'affaires</h4>
                  <p className="text-sm text-gray-500">Solutions BI pour la prise de décision</p>
                  <Link
                    href="/services/intelligence-affaires"
                    className="text-sm font-medium text-black inline-flex items-center mt-1"
                  >
                    En savoir plus <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                  </Link>
                </div>
              </div>

              <div className="flex items-start gap-3">
                <div className="rounded-full bg-gray-100 p-2">
                  <BarChart3 className="h-4 w-4" />
                </div>
                <div>
                  <h4 className="font-medium">Marketing basé sur les données</h4>
                  <p className="text-sm text-gray-500">Optimisation des campagnes marketing</p>
                  <Link
                    href="/services/marketing-donnees"
                    className="text-sm font-medium text-black inline-flex items-center mt-1"
                  >
                    En savoir plus <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                  </Link>
                </div>
              </div>
            </div>

            <div className="mt-8">
              <h3 className="text-xl font-bold mb-4">Études de cas</h3>
              <div className="space-y-4">
                <div className="rounded-lg border p-4">
                  <h4 className="font-medium">Optimisation des ventes e-commerce</h4>
                  <p className="text-sm text-gray-500 mt-1">
                    Analyse du comportement client ayant permis d'augmenter le panier moyen de 23% pour un site
                    e-commerce.
                  </p>
                  <Link
                    href="/etudes-de-cas/ecommerce"
                    className="text-sm font-medium text-black inline-flex items-center mt-2"
                  >
                    Lire l'étude de cas <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                  </Link>
                </div>

                <div className="rounded-lg border p-4">
                  <h4 className="font-medium">Prédiction de la demande</h4>
                  <p className="text-sm text-gray-500 mt-1">
                    Modèle prédictif ayant permis à un distributeur de réduire ses stocks de 15% tout en évitant les
                    ruptures.
                  </p>
                  <Link
                    href="/etudes-de-cas/prediction-demande"
                    className="text-sm font-medium text-black inline-flex items-center mt-2"
                  >
                    Lire l'étude de cas <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
