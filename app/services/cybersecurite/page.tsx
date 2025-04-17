import Link from "next/link"
import { ArrowLeft, Shield, Lock, AlertTriangle } from "lucide-react"
import { Button } from "@/components/ui/button"

export default function Cybersecurite() {
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
          <h1 className="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-6">Cybersécurité</h1>

          <div className="prose max-w-none">
            <p className="text-xl text-gray-500 mb-8">
              Protection de vos données et systèmes contre les menaces informatiques avec des solutions avancées.
            </p>

            <h2>La sécurité numérique, un enjeu critique pour votre entreprise</h2>
            <p>
              Dans un monde de plus en plus connecté, les cybermenaces évoluent constamment en sophistication et en
              fréquence. Les entreprises de toutes tailles sont des cibles potentielles, et une seule brèche peut avoir
              des conséquences désastreuses : perte de données sensibles, interruption d'activité, atteinte à la
              réputation, sanctions légales et pertes financières.
            </p>

            <h2>Mes services en Cybersécurité</h2>
            <p>
              Je propose une approche globale de la cybersécurité, adaptée à la taille et aux besoins spécifiques de
              votre entreprise, pour vous aider à protéger efficacement vos actifs numériques.
            </p>

            <h3>Audit de sécurité</h3>
            <p>
              Évaluation complète de votre infrastructure informatique, de vos applications et de vos pratiques pour
              identifier les vulnérabilités et les risques potentiels. L'audit inclut des tests d'intrusion, des
              analyses de vulnérabilités et une revue des politiques de sécurité.
            </p>

            <h3>Mise en place de solutions de protection</h3>
            <p>
              Déploiement de solutions de sécurité adaptées à vos besoins : pare-feu nouvelle génération, systèmes de
              détection et de prévention d'intrusion, protection des endpoints, sécurisation du réseau, etc.
            </p>

            <h3>Sécurisation des applications web</h3>
            <p>
              Protection de vos sites web et applications contre les attaques courantes (injection SQL, XSS, CSRF, etc.)
              et mise en conformité avec les bonnes pratiques de sécurité web (OWASP).
            </p>

            <h3>Gestion des identités et des accès</h3>
            <p>
              Mise en place de solutions d'authentification forte, de gestion des identités et des accès pour garantir
              que seules les personnes autorisées peuvent accéder à vos systèmes et données sensibles.
            </p>

            <h3>Formation et sensibilisation</h3>
            <p>
              Sessions de formation pour vos équipes sur les bonnes pratiques de sécurité, la reconnaissance des
              tentatives de phishing et la gestion sécurisée des données. L'humain étant souvent le maillon faible de la
              chaîne de sécurité, la sensibilisation est essentielle.
            </p>

            <h3>Plan de réponse aux incidents</h3>
            <p>
              Élaboration d'un plan détaillé pour réagir efficacement en cas d'incident de sécurité, minimiser les
              dommages et assurer une reprise rapide de l'activité.
            </p>

            <h2>Approche méthodologique</h2>
            <ol>
              <li>
                <strong>Évaluation</strong> - Analyse de votre environnement informatique et identification des risques
              </li>
              <li>
                <strong>Planification</strong> - Élaboration d'une stratégie de sécurité adaptée à vos besoins
              </li>
              <li>
                <strong>Implémentation</strong> - Mise en place des solutions et des mesures de protection
              </li>
              <li>
                <strong>Formation</strong> - Sensibilisation et formation de vos équipes
              </li>
              <li>
                <strong>Surveillance</strong> - Monitoring continu pour détecter les menaces potentielles
              </li>
              <li>
                <strong>Maintenance</strong> - Mises à jour régulières et adaptation aux nouvelles menaces
              </li>
            </ol>

            <h2>Pourquoi choisir mes services de cybersécurité ?</h2>
            <ul>
              <li>
                <strong>Expertise technique</strong> - Connaissance approfondie des dernières menaces et solutions
              </li>
              <li>
                <strong>Approche personnalisée</strong> - Solutions adaptées à votre contexte et à vos besoins
                spécifiques
              </li>
              <li>
                <strong>Vision holistique</strong> - Prise en compte des aspects techniques, humains et organisationnels
              </li>
              <li>
                <strong>Veille technologique</strong> - Suivi constant des évolutions dans le domaine de la
                cybersécurité
              </li>
              <li>
                <strong>Respect des normes</strong> - Conformité avec les standards et réglementations en vigueur
              </li>
            </ul>
          </div>

          <div className="mt-12 flex flex-col sm:flex-row gap-4">
            <Button className="rounded-full bg-black text-white hover:bg-gray-800">
              Demander un audit de sécurité
            </Button>
            <Button variant="outline" className="rounded-full">
              Consulter nos ressources
            </Button>
          </div>
        </div>

        <div className="lg:col-span-1">
          <div className="rounded-xl border bg-white p-6 shadow-sm">
            <h3 className="text-xl font-bold mb-4">Menaces courantes</h3>
            <div className="space-y-3">
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <AlertTriangle className="h-3.5 w-3.5" />
                </div>
                <span>Ransomware et malwares</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <AlertTriangle className="h-3.5 w-3.5" />
                </div>
                <span>Phishing et ingénierie sociale</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <AlertTriangle className="h-3.5 w-3.5" />
                </div>
                <span>Attaques par déni de service (DDoS)</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <AlertTriangle className="h-3.5 w-3.5" />
                </div>
                <span>Vol de données sensibles</span>
              </div>
              <div className="flex items-center gap-2">
                <div className="rounded-full bg-gray-100 p-1.5">
                  <AlertTriangle className="h-3.5 w-3.5" />
                </div>
                <span>Compromission des identifiants</span>
              </div>
            </div>

            <div className="mt-8">
              <h3 className="text-xl font-bold mb-4">Certifications</h3>
              <div className="space-y-2">
                <div className="flex items-center gap-2">
                  <Shield className="h-5 w-5 text-gray-700" />
                  <span>Certified Information Systems Security Professional (CISSP)</span>
                </div>
                <div className="flex items-center gap-2">
                  <Shield className="h-5 w-5 text-gray-700" />
                  <span>Certified Ethical Hacker (CEH)</span>
                </div>
                <div className="flex items-center gap-2">
                  <Shield className="h-5 w-5 text-gray-700" />
                  <span>CompTIA Security+</span>
                </div>
              </div>
            </div>

            <div className="mt-8 p-4 bg-gray-50 rounded-lg">
              <h4 className="font-medium mb-2">Saviez-vous que...</h4>
              <p className="text-sm text-gray-600">
                60% des petites entreprises victimes d'une cyberattaque majeure ferment leurs portes dans les six mois
                suivant l'incident. Une protection adéquate n'est pas un luxe, c'est une nécessité.
              </p>
            </div>

            <div className="mt-8">
              <h3 className="text-xl font-bold mb-4">Services associés</h3>
              <div className="space-y-4">
                <div className="flex items-start gap-3">
                  <div className="rounded-full bg-gray-100 p-2">
                    <Lock className="h-4 w-4" />
                  </div>
                  <div>
                    <h4 className="font-medium">Conformité RGPD</h4>
                    <p className="text-sm text-gray-500">
                      Mise en conformité avec la réglementation sur la protection des données
                    </p>
                    <Link
                      href="/services/conformite-rgpd"
                      className="text-sm font-medium text-black inline-flex items-center mt-1"
                    >
                      En savoir plus <ArrowLeft className="ml-1 h-3 w-3 rotate-180" />
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
