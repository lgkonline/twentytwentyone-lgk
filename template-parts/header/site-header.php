<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<div class="container">
    <header class="header">
        <div class="header-nav">
            <a href="https://lgk.io/">Start</a>
            <a class="active" aria-current="page" href="<?php echo get_home_url(); ?>" target="_top">Blog</a>
            <a href="https://lgk.io/projects">Projekte</a>
            <a href="https://lgk.io/about-me">Über mich</a>
        </div>
        
        <div class="header-logo">
            <a class="active" aria-current="page" aria-label="LGK logo" href="https://lgk.io/">
                <div class="lgk-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" clip-rule="evenodd" viewBox="0 0 627 635" fill="currentColor"><g><circle cx="312.633" cy="318.133" r="50"></circle><path fill-rule="nonzero" d="M529.008 101.758c-57.796-57.796-134.64-89.625-216.375-89.625-81.736 0-158.579 31.83-216.375 89.625C38.463 159.554 6.633 236.397 6.633 318.133c0 81.735 31.83 158.579 89.625 216.375 57.795 57.796 134.639 89.625 216.375 89.625 81.735 0 158.579-31.829 216.375-89.625 57.796-57.796 89.625-134.64 89.625-216.375 0-81.736-31.829-158.579-89.625-216.375zm-73.911 76.009a200.76 200.76 0 0130.611 40.1l-37.028 37.028a150.322 150.322 0 00-28.941-41.77l35.358-35.358zM287.394 69.405a252.367 252.367 0 0125.239-1.273c8.357 0 16.614.425 24.761 1.226V170.18a150.788 150.788 0 00-50 .077V69.405zm50 345.636v151.872a251.566 251.566 0 01-24.694 1.22c-10.626 0-21.306-.668-31.306-1.955v-.003c-1-.169-2.761-.359-4.105-.55-.523-.074-1.114-.142-1.636-.22a256.031 256.031 0 01-3.745-.592c-.651-.107-1.302-.212-1.952-.323a249.569 249.569 0 01-5.628-1.038 248.557 248.557 0 01-3.576-.724c-.647-.137-1.291-.28-1.936-.421-1.215-.267-2.43-.534-3.639-.818-.514-.121-1.024-.251-1.537-.375a246.878 246.878 0 01-12.527-3.38c-.603-.18-1.208-.354-1.809-.538a247.011 247.011 0 01-3.325-1.052c-.699-.225-1.398-.449-2.094-.68a265.88 265.88 0 01-8.474-2.98c-.728-.271-1.451-.55-2.176-.827-1.027-.393-2.055-.786-3.076-1.192-.702-.28-1.399-.571-2.098-.857a249.263 249.263 0 01-6.036-2.561c-.6-.264-1.205-.52-1.802-.788-.927-.417-1.846-.85-2.767-1.278-.789-.366-1.58-.729-2.364-1.104-.892-.426-1.777-.862-2.663-1.298-.808-.397-1.615-.796-2.418-1.202a260.273 260.273 0 01-7.518-3.961c-.857-.47-1.708-.95-2.558-1.43-.774-.437-1.551-.871-2.32-1.316-.994-.575-1.978-1.164-2.963-1.752-.617-.368-1.239-.728-1.852-1.102a249.264 249.264 0 01-4.569-2.852c-.631-.403-1.254-.818-1.882-1.227a251.875 251.875 0 01-2.836-1.867c-.671-.45-1.335-.908-2.002-1.365-.89-.61-1.777-1.222-2.659-1.843a255.446 255.446 0 01-4.628-3.341 238.64 238.64 0 01-1.896-1.41 248.542 248.542 0 01-2.775-2.128c-.555-.431-1.114-.857-1.665-1.292a249.81 249.81 0 01-3.545-2.855c-.269-.221-.544-.436-.812-.657a250.002 250.002 0 01-4.246-3.59c-.45-.389-.893-.786-1.34-1.178a247.926 247.926 0 01-2.874-2.55c-.527-.476-1.048-.958-1.571-1.439a229.92 229.92 0 01-4.178-3.927 252.2 252.2 0 01-2.509-2.45c-.509-.504-1.019-1.007-1.524-1.516-.24-.242-.475-.488-.714-.731l35.58-35.108c-35.572-36.106-57.522-85.668-57.522-140.357 0-55.616 22.701-105.929 59.342-142.18l35.356 35.356c-27.593 27.202-44.698 65.016-44.698 106.824 0 41.002 16.451 78.161 43.112 105.238l-35.59 35.119c30.712 31.173 71.58 52.31 117.239 58.06V414.918c-43.009-11.184-74.761-50.275-74.761-96.785 0-55.229 44.772-100 100-100s100 44.771 100 100c0 46.681-31.988 85.89-75.239 96.908zm152.775 79.106l-70.712-70.712a150.302 150.302 0 0028.984-41.55l73.294 73.294a251.165 251.165 0 01-31.566 38.968z"></path></g></svg>
                </div>
            </a>
        </div>
        
        <div class="header-social"><a href="https://instagram.com/3lgeekay" title="Instagram" target="_blank" rel="noopener"><span class="icon-instagram"></span></a><a href="https://twitter.com/lgkonline" title="Twitter" target="_blank" rel="noopener"><span class="icon-twitter"></span></a><a href="https://twitter.com/3lgeekay" title="Twitter" target="_blank" rel="noopener"><span class="icon-twitter"></span><small>DE</small></a><a href="https://youtube.com/lgktube" title="YouTube" target="_blank" rel="noopener"><span class="icon-youtube"></span></a><a href="https://github.com/lgkonline" title="GitHub" target="_blank" rel="noopener"><span class="icon-github"></span></a><a href="https://www.behance.net/lgk" title="Behance" target="_blank" rel="noopener"><span class="icon-behance"></span></a></div>
    </header>
</div>