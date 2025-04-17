<?php
/**
 * Template Name: Services Gallery
 *
 * @package JPHenri
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding: 3rem 1rem;">
        <header class="page-header" style="margin-bottom: 2rem; text-align: center;">
            <h1 class="entry-title" style="font-size: 2.5rem; font-weight: 700;"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </header>

        <div class="services-gallery" style="margin-top: 3rem;">
            <?php
            $services_args = array(
                'post_type' => 'service',
                'posts_per_page' => -1,
            );
            
            $services_query = new WP_Query( $services_args );
            
            if ( $services_query->have_posts() ) :
                echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" style="gap: 2rem;">';
                
                while ( $services_query->have_posts() ) : $services_query->the_post();
                    $icon = get_post_meta( get_the_ID(), '_service_icon', true );
                    ?>
                    <div class="service-gallery-item" style="text-align: center; padding: 2rem; border: 1px solid #e5e5e5; border-radius: 0.5rem; background-color: white;">
                        <div class="service-icon" style="width: 120px; height: 120px; margin: 0 auto; background-color: #f9f9f9; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <i class="fas <?php echo esc_attr( $icon ? $icon : 'fa-cog' ); ?>" style="font-size: 3rem;"></i>
                        </div>
                        <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;"><?php the_title(); ?></h2>
                        <div style="margin-bottom: 1.5rem;"><?php the_excerpt(); ?></div>
                        
                        <div class="download-options" style="display: flex; flex-direction: column; gap: 0.75rem;">
                            <a href="#" class="download-icon btn btn-outline service-icon-download" data-icon="<?php echo esc_attr( $icon ? $icon : 'fa-cog' ); ?>" data-title="<?php echo esc_attr( get_the_title() ); ?>">
                                <i class="fas fa-download"></i> Télécharger l'icône
                            </a>
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" class="btn btn-outline" download>
                                <i class="fas fa-image"></i> Télécharger l'image
                            </a>
                            <?php endif; ?>
                            
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                <i class="fas fa-info-circle"></i> Détails du service
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                
                echo '</div>';
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
                
                echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" style="gap: 2rem;">';
                
                foreach ( $services as $service ) :
                    ?>
                    <div class="service-gallery-item" style="text-align: center; padding: 2rem; border: 1px solid #e5e5e5; border-radius: 0.5rem; background-color: white;">
                        <div class="service-icon" style="width: 120px; height: 120px; margin: 0 auto; background-color: #f9f9f9; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <i class="fas <?php echo esc_attr( $service['icon'] ); ?>" style="font-size: 3rem;"></i>
                        </div>
                        <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;"><?php echo esc_html( $service['title'] ); ?></h2>
                        <div style="margin-bottom: 1.5rem;"><?php echo esc_html( $service['description'] ); ?></div>
                        
                        <div class="download-options" style="display: flex; flex-direction: column; gap: 0.75rem;">
                            <a href="#" class="download-icon btn btn-outline service-icon-download" data-icon="<?php echo esc_attr( $service['icon'] ); ?>" data-title="<?php echo esc_attr( $service['title'] ); ?>">
                                <i class="fas fa-download"></i> Télécharger l'icône
                            </a>
                        </div>
                    </div>
                    <?php
                endforeach;
                
                echo '</div>';
            endif;
            ?>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const downloadButtons = document.querySelectorAll('.service-icon-download');
    
    downloadButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const icon = this.getAttribute('data-icon');
            const title = this.getAttribute('data-title');
            
            // Create a canvas to draw the icon
            const canvas = document.createElement('canvas');
            canvas.width = 500;
            canvas.height = 500;
            const ctx = canvas.getContext('2d');
            
            // Fill background
            ctx.fillStyle = '#ffffff';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            // Draw circle
            ctx.fillStyle = '#f9f9f9';
            ctx.beginPath();
            ctx.arc(250, 200, 150, 0, Math.PI * 2);
            ctx.fill();
            ctx.strokeStyle = '#e5e5e5';
            ctx.lineWidth = 3;
            ctx.stroke();
            
            // Draw title at the bottom
            ctx.fillStyle = '#000000';
            ctx.font = 'bold 36px sans-serif';
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';
            ctx.fillText(title, 250, 400);
            
            // Add service description
            ctx.font = '24px sans-serif';
            ctx.fillText('Service JPHenri Consultant', 250, 450);
            
            // Convert to image and download
            const dataUrl = canvas.toDataURL('image/png');
            const downloadLink = document.createElement('a');
            downloadLink.href = dataUrl;
            downloadLink.download = `service-${title.toLowerCase().replace(/\s+/g, '-')}.png`;
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        });
    });
});
</script>

<?php
get_footer();
