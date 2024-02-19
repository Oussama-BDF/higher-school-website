<?php
/*
Template Name: AMO Page
*/
?>

<?php get_header(); ?>

<section class="pd-b-60 page">
    <div class="container">
        <h2 class="heading">Assurance Maladie Obligatoire</h2>
        <div class="row">
            <div class="col col-lg-4">
                <div id="thumbnail_container" class="thumbnail_container" style="border: 2px solid var(--secondary-color-3);">
                    <img class="img-responsive img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/amo.png" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <h2  style="margin-bottom: 10px;">ASSURANCE MALADIE OBLIGATOIRE DE BASE (AMO)</h2>
                <p>
                    Chers étudiants,</br>
                    La souscription à l'AMO-Etudiant a été simplifiée. Il s'agit d'une opération : gratuite, légère, entièrement en ligne, unique, se fait une seule fois durant tout le cursus universitaire.</br>
                    Plus d'informations sont disponibles sur les documents ci-joints, et le lien suivant: <a href="https://www.cnops.org.ma">www.cnops.org.ma</a>
                </p>
                <a class="link-amo" href="<?php echo get_template_directory_uri()?>/uploads/A.pdf" target="_blank">Brochure <i class="fa-regular fa-file-pdf"></i></a></br>
                <a class="link-amo" href="<?php echo get_template_directory_uri()?>/uploads/C.pdf" target="_blank">Dépliant de la préstation <i class="fa-regular fa-file-pdf"></i></a></br>
                <a class="link-amo" href="<?php echo get_template_directory_uri()?>/uploads/B.pdf" target="_blank">Guide de l'AMO <i class="fa-regular fa-file-pdf"></i></a></br>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>