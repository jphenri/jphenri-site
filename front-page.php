<?php
/**
 * The template for displaying the front page
 *
 * @package JPHenri
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- Hero Section -->
		<section class="section">
			<div class="container">
				<div class="hero">
					<h1 class="hero-title">
						<?php echo esc_html( jphenri_get_option( 'hero_title', __( 'Intelligence Artificielle & Optimisation Numérique', 'jphenri' ) ) ); ?>
					</h1>
					<p class="hero-description">
						<?php echo esc_html( jphenri_get_option( 'hero_description', __( 'Solutions IA avancées pour améliorer votre présence en ligne et optimiser vos stratégies numériques.', 'jphenri' ) ) ); ?>
					</p>
					<div class="hero-actions">
						<a href="<?php echo esc_url( jphenri_get_option( 'cta_button_url', '/services' ) ); ?>" class="btn btn-primary">
							<?php echo esc_html( jphenri_get_option( 'cta_button_text', __( 'Découvrir mes services', 'jphenri' ) ) ); ?>
							<i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
						</a>
						<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-outline">
							<?php esc_html_e( 'Contacter', 'jphenri' ); ?>
						</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Services Section -->
		<section class="section section-alt">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title"><?php esc_html_e( 'Services', 'jphenri' ); ?></h2>
					<p class="section-description">
						<?php esc_html_e( 'Des solutions sur mesure pour optimiser votre présence numérique', 'jphenri' ); ?>
					</p>
				</div>
				
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" style="max-width: 1200px; margin: 0 auto; margin-top: 3rem;">
					<?php
					$services_args = array(
						'post_type' => 'service',
						'posts_per_page' => 6,
					);
					
					$services_query = new WP_Query( $services_args );
					
					if ( $services_query->have_posts() ) :
						while ( $services_query->have_posts() ) : $services_query->the_post();
							$icon = get_post_meta( get_the_ID(), '_service_icon', true );
							?>
							<div class="icon-box">
								<div class="icon-circle">
									<i class="fas <?php echo esc_attr( $icon ? $icon : 'fa-cog' ); ?>"></i>
								</div>
								<h3 class="icon-title"><?php the_title(); ?></h3>
								<p class="icon-description"><?php echo get_the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="card-link">
									<?php esc_html_e( 'En savoir plus', 'jphenri' ); ?>
									<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
								</a>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					else :
						// Fallback services if no custom post types are created yet
						$services = array(
							array(
								'icon' => 'fa-microchip',
								'title' => __( 'Intelligence Artificielle', 'jphenri' ),
								'description' => __( 'Intégration d\'outils IA avancés comme ChatGPT, xAI et Gemini pour optimiser vos processus.', 'jphenri' ),
							),
							array(
								'icon' => 'fa-globe',
								'title' => __( 'SEO & Référencement', 'jphenri' ),
								'description' => __( 'Optimisation du référencement naturel pour améliorer votre visibilité en ligne.', 'jphenri' ),
							),
							array(
								'icon' => 'fa-chart-line',
								'title' => __( 'Analyse de Données', 'jphenri' ),
								'description' => __( 'Analyses basées sur les données pour surveiller les indicateurs de performance et affiner les stratégies.', 'jphenri' ),
							),
							array(
								'icon' => 'fa-robot',
								'title' => __( 'Agents IA Automatisés', 'jphenri' ),
								'description' => __( 'Conception d\'agents IA pour rationaliser la création de contenu et l\'engagement client.', 'jphenri' ),
							),
							array(
								'icon' => 'fa-code',
								'title' => __( 'Développement Web', 'jphenri' ),
								'description' => __( 'Création de sites web et d\'applications optimisés pour les moteurs de recherche et l\'expérience utilisateur.', 'jphenri' ),
							),
							array(
								'icon' => 'fa-shield-alt',
								'title' => __( 'Cybersécurité', 'jphenri' ),
								'description' => __( 'Protection de vos données et systèmes contre les menaces informatiques avec des solutions avancées.', 'jphenri' ),
							),
						);
						
						foreach ( $services as $service ) :
							?>
							<div class="icon-box">
								<div class="icon-circle">
									<i class="fas <?php echo esc_attr( $service['icon'] ); ?>"></i>
								</div>
								<h3 class="icon-title"><?php echo esc_html( $service['title'] ); ?></h3>
								<p class="icon-description"><?php echo esc_html( $service['description'] ); ?></p>
								<a href="<?php echo esc_url( get_post_type_archive_link( 'service' ) ); ?>" class="card-link">
									<?php esc_html_e( 'En savoir plus', 'jphenri' ); ?>
									<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
								</a>
							</div>
							<?php
						endforeach;
					endif;
					?>
				</div>
			</div>
		</section>

		<!-- About Section -->
		<section class="section">
			<div class="container">
				<div class="about-grid">
					<div class="about-content">
						<h2 class="section-title"><?php esc_html_e( 'À propos', 'jphenri' ); ?></h2>
						<p class="section-description">
							<?php esc_html_e( 'Professionnel en IT et consultant en IA depuis 2015, basé à Gatineau, Québec.', 'jphenri' ); ?>
						</p>
						<div style="margin-top: 1rem;">
							<p style="color: var(--muted-foreground); margin-bottom: 1rem;">
								<?php esc_html_e( 'Je suis un professionnel en IT et chef de projet avec une solide expérience en gestion de systèmes. Au fil des années, j\'ai dirigé de nombreux projets, coordonnant le déploiement et la gestion de flottes informatiques complètes à travers le Canada.', 'jphenri' ); ?>
							</p>
							<p style="color: var(--muted-foreground);">
								<?php esc_html_e( 'Passionné par les dernières avancées en IA, cybersécurité et Linux, mon objectif est de continuer à apprendre et à me perfectionner dans mon domaine pour offrir les meilleures solutions à mes clients.', 'jphenri' ); ?>
							</p>
						</div>
						<div style="margin-top: 1.5rem;">
							<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>" class="btn btn-primary">
								<?php esc_html_e( 'Mon parcours complet', 'jphenri' ); ?>
							</a>
						</div>
					</div>
					<div class="about-image">
						<?php
						$about_page = get_page_by_path( 'about' );
						if ( $about_page && has_post_thumbnail( $about_page->ID ) ) :
							echo get_the_post_thumbnail( $about_page->ID, 'large', array( 'style' => 'border-radius: 0.75rem;' ) );
						else :
							?>
							<div style="display: flex; align-items: center; justify-content: center; height: 100%;">
								<span style="font-size: 0.875rem; color: var(--muted-foreground);">
									<?php esc_html_e( 'Votre photo professionnelle', 'jphenri' ); ?>
								</span>
							</div>
							<?php
						endif;
						?>
					</div>
				</div>
			</div>
		</section>

		<!-- Projects Section -->
		<section class="section section-alt">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title"><?php esc_html_e( 'Projets', 'jphenri' ); ?></h2>
					<p class="section-description">
						<?php esc_html_e( 'Découvrez quelques-uns de mes projets récents', 'jphenri' ); ?>
					</p>
				</div>
				
				<div class="grid grid-cols-1 md:grid-cols-2" style="max-width: 1200px; margin: 0 auto; margin-top: 3rem;">
					<?php
					$projects_args = array(
						'post_type' => 'project',
						'posts_per_page' => 2,
					);
					
					$projects_query = new WP_Query( $projects_args );
					
					if ( $projects_query->have_posts() ) :
						while ( $projects_query->have_posts() ) : $projects_query->the_post();
							$features = get_post_meta( get_the_ID(), '_project_features', true );
							$features_array = $features ? explode( "\n", $features ) : array();
							?>
							<div class="card">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="card-image">
										<?php the_post_thumbnail( 'medium_large' ); ?>
									</div>
								<?php else : ?>
									<div class="card-image">
										<span style="font-size: 0.875rem;">
											<?php esc_html_e( 'Image du projet', 'jphenri' ); ?> <?php the_title(); ?>
										</span>
									</div>
								<?php endif; ?>
								<div class="card-content">
									<h3 class="card-title"><?php the_title(); ?></h3>
									<div class="card-description"><?php the_excerpt(); ?></div>
									<?php if ( !empty( $features_array ) ) : ?>
										<div style="margin-top: 0.5rem;">
											<h4 style="font-size: 0.875rem; font-weight: 600; margin-bottom: 0.25rem;">
												<?php esc_html_e( 'Caractéristiques clés:', 'jphenri' ); ?>
											</h4>
											<ul style="list-style-type: disc; padding-left: 1.25rem; font-size: 0.875rem; color: var(--muted-foreground);">
												<?php foreach ( $features_array as $feature ) : ?>
													<li><?php echo esc_html( trim( $feature ) ); ?></li>
												<?php endforeach; ?>
											</ul>
										</div>
									<?php endif; ?>
									<a href="<?php the_permalink(); ?>" class="card-link">
										<?php esc_html_e( 'Voir le projet', 'jphenri' ); ?>
										<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
									</a>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					else :
						// Fallback projects if no custom post types are created yet
						$projects = array(
							array(
								'title' => __( 'Chez Gerry 1958', 'jphenri' ),
								'description' => __( 'Site dédié aux services de restauration de chaussures, spécialisé dans les chaussures en cuir Goodyear welt. J\'ai conçu une interface intuitive, optimisé le référencement et implémenté des passerelles de paiement sécurisées.', 'jphenri' ),
								'features' => array(
									__( 'Interface utilisateur intuitive', 'jphenri' ),
									__( 'Optimisation SEO', 'jphenri' ),
									__( 'Mesures de sécurité robustes', 'jphenri' ),
								),
							),
							array(
								'title' => __( 'Pronatureqc.com (2015-2018)', 'jphenri' ),
								'description' => __( 'Plateforme e-commerce développée et optimisée pour la vente de produits de plein air et de chasse. Le projet a impliqué la construction d\'un site convivial, l\'optimisation du référencement et l\'implémentation de systèmes de paiement sécurisés.', 'jphenri' ),
								'features' => array(
									__( 'Plateforme e-commerce complète', 'jphenri' ),
									__( 'Optimisation pour les moteurs de recherche', 'jphenri' ),
									__( 'Expérience utilisateur intuitive', 'jphenri' ),
								),
							),
						);
						
						foreach ( $projects as $project ) :
							?>
							<div class="card">
								<div class="card-image">
									<span style="font-size: 0.875rem;">
										<?php esc_html_e( 'Image du projet', 'jphenri' ); ?> <?php echo esc_html( $project['title'] ); ?>
									</span>
								</div>
								<div class="card-content">
									<h3 class="card-title"><?php echo esc_html( $project['title'] ); ?></h3>
									<div class="card-description"><?php echo esc_html( $project['description'] ); ?></div>
									<?php if ( !empty( $project['features'] ) ) : ?>
										<div style="margin-top: 0.5rem;">
											<h4 style="font-size: 0.875rem; font-weight: 600; margin-bottom: 0.25rem;">
												<?php esc_html_e( 'Caractéristiques clés:', 'jphenri' ); ?>
											</h4>
											<ul style="list-style-type: disc; padding-left: 1.25rem; font-size: 0.875rem; color: var(--muted-foreground);">
												<?php foreach ( $project['features'] as $feature ) : ?>
													<li><?php echo esc_html( $feature ); ?></li>
												<?php endforeach; ?>
											</ul>
										</div>
									<?php endif; ?>
									<a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>" class="card-link">
										<?php esc_html_e( 'Voir le projet', 'jphenri' ); ?>
										<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
									</a>
								</div>
							</div>
							<?php
						endforeach;
					endif;
					?>
				</div>
			</div>
		</section>

		<!-- Blog Section -->
		<section class="section">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title"><?php esc_html_e( 'Blog', 'jphenri' ); ?></h2>
					<p class="section-description">
						<?php esc_html_e( 'Découvrez mes derniers articles sur l\'IA et l\'optimisation numérique', 'jphenri' ); ?>
					</p>
				</div>
				
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" style="max-width: 1200px; margin: 0 auto; margin-top: 3rem;">
					<?php
					$posts_args = array(
						'post_type' => 'post',
						'posts_per_page' => 3,
					);
					
					$posts_query = new WP_Query( $posts_args );
					
					if ( $posts_query->have_posts() ) :
						while ( $posts_query->have_posts() ) : $posts_query->the_post();
							?>
							<div class="card">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="card-image">
										<?php the_post_thumbnail( 'medium_large' ); ?>
									</div>
								<?php else : ?>
									<div class="card-image">
										<span style="font-size: 0.875rem;">
											<?php esc_html_e( 'Image de l\'article', 'jphenri' ); ?>
										</span>
									</div>
								<?php endif; ?>
								<div class="card-content">
									<p class="card-meta"><?php echo get_the_date(); ?></p>
									<h3 class="card-title"><?php the_title(); ?></h3>
									<div class="card-description"><?php the_excerpt(); ?></div>
									<a href="<?php the_permalink(); ?>" class="card-link">
										<?php esc_html_e( 'Lire l\'article', 'jphenri' ); ?>
										<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
									</a>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					else :
						// Fallback blog posts if no posts exist yet
						for ( $i = 1; $i <= 3; $i++ ) :
							?>
							<div class="card">
								<div class="card-image">
									<span style="font-size: 0.875rem;">
										<?php esc_html_e( 'Image de l\'article', 'jphenri' ); ?> <?php echo $i; ?>
									</span>
								</div>
								<div class="card-content">
									<p class="card-meta">12 Mai 2024</p>
									<h3 class="card-title"><?php esc_html_e( 'Comment l\'IA révolutionne le marketing digital', 'jphenri' ); ?></h3>
									<div class="card-description">
										<?php esc_html_e( 'Découvrez comment les outils d\'intelligence artificielle transforment les stratégies de marketing numérique.', 'jphenri' ); ?>
									</div>
									<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="card-link">
										<?php esc_html_e( 'Lire l\'article', 'jphenri' ); ?>
										<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
									</a>
								</div>
							</div>
							<?php
						endfor;
					endif;
					?>
				</div>
				
				<div style="text-align: center; margin-top: 2rem;">
					<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-outline">
						<?php esc_html_e( 'Voir tous les articles', 'jphenri' ); ?>
					</a>
				</div>
			</div>
		</section>

		<!-- Contact Section -->
		<section class="section section-alt">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title"><?php esc_html_e( 'Contact', 'jphenri' ); ?></h2>
					<p class="section-description">
						<?php esc_html_e( 'Prêt à transformer votre présence numérique? Contactez-moi dès aujourd\'hui.', 'jphenri' ); ?>
					</p>
				</div>
				
				<div class="contact-form">
					<?php
					$contact_page = get_page_by_path( 'contact' );
					if ( $contact_page ) :
						echo apply_filters( 'the_content', $contact_page->post_content );
					else :
					?>
						<form action="#" method="post" class="form">
							<div class="form-grid form-grid-2">
								<div class="form-group">
									<label for="name" class="form-label"><?php esc_html_e( 'Nom', 'jphenri' ); ?></label>
									<input type="text" id="name" name="name" class="form-control" placeholder="<?php esc_attr_e( 'Votre nom', 'jphenri' ); ?>" required>
								</div>
								<div class="form-group">
									<label for="email" class="form-label"><?php esc_html_e( 'Email', 'jphenri' ); ?></label>
									<input type="email" id="email" name="email" class="form-control" placeholder="<?php esc_attr_e( 'Votre email', 'jphenri' ); ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="form-label"><?php esc_html_e( 'Message', 'jphenri' ); ?></label>
								<textarea id="message" name="message" class="form-control" placeholder="<?php esc_attr_e( 'Votre message', 'jphenri' ); ?>" rows="5" required></textarea>
							</div>
							<button type="submit" class="btn btn-primary" style="width: 100%;">
								<?php esc_html_e( 'Envoyer', 'jphenri' ); ?>
							</button>
						</form>
					<?php endif; ?>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
