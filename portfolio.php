<!--portfolio start-->
<section id="portfolio" class="mySection bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="s-heading text-uppercase fw-bold">Portfolio</h2>
            <h3 class="s-subheading text-muted">Entdecken Sie unsere neuesten Projekte und Kreationen.</h3>
        </div>
        <div class="row gy-4">
            <div class="col-sm-6 col-lg-4">
                <div class="p-item">
                    <a href="#PModal1" class="p-link" data-bs-toggle="modal">
                        <div class="p-hover">
                            <div class="ph-content text-white">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png" alt=".." />
                    </a>
                    <div class="p-caption text-center bg-white p-4">
                        <div class="pc-heading">Schattenprinz</div>
                        <div class="pc-subheading text-muted fst-italic">Illustration</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="p-item">
                    <a href="#PModal2" class="p-link" data-bs-toggle="modal">
                        <div class="p-hover">
                            <div class="ph-content text-white">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg" alt=".." />
                    </a>
                    <div class="p-caption text-center bg-white p-4">
                        <div class="pc-heading">Entdeckungsreise</div>
                        <div class="pc-subheading text-muted fst-italic">Grafikdesign</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="p-item">
                    <a href="#PModal3" class="p-link" data-bs-toggle="modal">
                        <div class="p-hover">
                            <div class="ph-content text-white">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg" alt=".." />
                    </a>
                    <div class="p-caption text-center bg-white p-4">
                        <div class="pc-heading">Lineares Universum</div>
                        <div class="pc-subheading text-muted fst-italic">Branding</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="p-item">
                    <a href="#PModal4" class="p-link" data-bs-toggle="modal">
                        <div class="p-hover">
                            <div class="ph-content text-white">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg" alt=".." />
                    </a>
                    <div class="p-caption text-center bg-white p-4">
                        <div class="pc-heading">Matrix</div>
                        <div class="pc-subheading text-muted fst-italic">Markenentwicklung</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="p-item">
                    <a href="#PModal5" class="p-link" data-bs-toggle="modal">
                        <div class="p-hover">
                            <div class="ph-content text-white">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.jpeg" alt=".." />
                    </a>
                    <div class="p-caption text-center bg-white p-4">
                        <div class="pc-heading">Tiefenlinie</div>
                        <div class="pc-subheading text-muted fst-italic">Webdesign</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="p-item">
                    <a href="#PModal6" class="p-link" data-bs-toggle="modal">
                        <div class="p-hover">
                            <div class="ph-content text-white">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/6.jpg" alt=".." />
                    </a>
                    <div class="p-caption text-center bg-white p-4">
                        <div class="pc-heading">Traumfenster</div>
                        <div class="pc-subheading text-muted fst-italic">Fotografie</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--portfolio end-->


<!-- portfolio modal item 1-->
<div class="modal fade p-modal" id="PModal1" tabindex="-1" role="dialog" aria-labelledby="myTitle1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="<?php echo get_template_directory_uri(); ?>/img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle1">Schattenprinz</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Einzigartige Illustration, die Fantasie und Realität verbindet.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png" alt="..." />
                <p class="my-4 col-lg-6 mx-auto">Dieses Projekt zeigt eine Illustration, die in einer fiktiven Welt angesiedelt ist und die Geschichte eines Prinzen erzählt, der im Schatten lebt und dessen Schicksal es ist, sein Königreich aus der Dunkelheit zu führen. Die Detailtiefe und Farbgebung unterstreichen die mystische Atmosphäre und erwecken die Geschichte zum Leben.</p>
                <ul class="list-inline mb-4">
                    <li><strong>Kunde:</strong> Schattenprinz</li>
                    <li><strong>Kategorie:</strong> Illustration</li>
                </ul>
                <button class="btn btn-danger btn-lg text-uppercase py-3" data-bs-dismiss="modal" type="button">Projekt schließen <i class="bi bi-x-lg ms-1"></i></button>
            </div>
        </div>
    </div>
</div>

<!-- portfolio modal item 2-->
<div class="modal fade p-modal" id="PModal2" tabindex="-1" role="dialog" aria-labelledby="myTitle2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="<?php echo get_template_directory_uri(); ?>/img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle2">Entdeckungsreise</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Ein grafisches Meisterwerk, das die Schönheit der Entdeckung einfängt.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg" alt="..." />
                <p class="my-4 col-lg-6 mx-auto">Dieses Grafikdesign-Projekt repräsentiert die Reise des Entdeckens mit lebhaften Farben und dynamischen Formen. Es symbolisiert, wie jeder Schritt in unbekannte Gebiete unsere Perspektive erweitert und uns neue Horizonte eröffnet. Die Komposition balanciert zwischen Abstraktion und Realismus, um ein tiefes Gefühl der Bewegung und des Fortschritts zu vermitteln.</p>
                <ul class="list-inline mb-4">
                    <li><strong>Kunde:</strong> Entdeckungsreise</li>
                    <li><strong>Kategorie:</strong> Grafikdesign</li>
                </ul>
                <button class="btn btn-danger btn-lg text-uppercase py-3" data-bs-dismiss="modal" type="button">Projekt schließen <i class="bi bi-x-lg ms-1"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- portfolio modal item 3-->
<div class="modal fade p-modal" id="PModal3" tabindex="-1" role="dialog" aria-labelledby="myTitle3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="<?php echo get_template_directory_uri(); ?>/img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle3">Lineares Universum</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Eine Marke, die die Essenz von Einfachheit und Eleganz einfängt.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg" alt="..." />
                <p class="my-4 col-lg-6 mx-auto">Dieses Branding-Projekt konzentriert sich auf die Schaffung einer visuellen Identität, die Klarheit und Modernität ausstrahlt. Mit einer minimalistischen Farbpalette und scharfen Linien soll ein einprägsames Bild einer Marke geschaffen werden, die sich durch Geradlinigkeit und Innovation auszeichnet. Die Kombination aus schlichtem Design und kraftvollen Botschaften stellt eine Verbindung zum zeitgenössischen Publikum her.</p>
                <ul class="list-inline mb-4">
                    <li><strong>Kunde:</strong> Lineares Universum</li>
                    <li><strong>Kategorie:</strong> Branding</li>
                </ul>
                <button class="btn btn-danger btn-lg text-uppercase py-3" data-bs-dismiss="modal" type="button">Projekt schließen <i class="bi bi-x-lg ms-1"></i></button>
            </div>
        </div>
    </div>
</div>

<!-- portfolio modal item 4-->
<div class="modal fade p-modal" id="PModal4" tabindex="-1" role="dialog" aria-labelledby="myTitle4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="<?php echo get_template_directory_uri(); ?>/img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle4">Matrix</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Die Evolution der Markenidentität in der digitalen Ära.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg" alt="..." />
                <p class="my-4 col-lg-6 mx-auto">Unser Ansatz für dieses Markenentwicklungsprojekt war es, eine dynamische, flexible Identität zu schaffen, die sich in der schnelllebigen digitalen Welt behauptet. Die Verwendung von geometrischen Mustern und digital inspirierten Texturen spiegelt die Kernwerte der Innovation und Technologie der Marke wider. Dieses Projekt demonstriert, wie traditionelle Konzepte in neue, digitale Formate übersetzt werden können.</p>
                <ul class="list-inline mb-4">
                    <li><strong>Kunde:</strong> Matrix</li>
                    <li><strong>Kategorie:</strong> Markenentwicklung</li>
                </ul>
                <button class="btn btn-danger btn-lg text-uppercase py-3" data-bs-dismiss="modal" type="button">Projekt schließen <i class="bi bi-x-lg ms-1"></i></button>
            </div>
        </div>
    </div>
</div>

<!-- portfolio modal item 5-->
<div class="modal fade p-modal" id="PModal5" tabindex="-1" role="dialog" aria-labelledby="myTitle5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="<?php echo get_template_directory_uri(); ?>/img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle5">Tiefenlinie</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Ein Webdesign, das Tiefe und Navigation harmonisch verbindet.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.jpeg" alt="..." />
                <p class="my-4 col-lg-6 mx-auto">Bei der Gestaltung dieser Website lag der Fokus darauf, eine Benutzeroberfläche zu schaffen, die nicht nur ästhetisch ansprechend ist, sondern auch eine intuitive Navigation bietet. Durch den Einsatz von Tiefenschärfe und sanften Übergängen entsteht ein einzigartiges Surferlebnis, das den Nutzer visuell und funktionell durch die Inhalte leitet.</p>
                <ul class="list-inline mb-4">
                    <li><strong>Kunde:</strong> Tiefenlinie</li>
                    <li><strong>Kategorie:</strong> Webdesign</li>
                </ul>
                <button class="btn btn-danger btn-lg text-uppercase py-3" data-bs-dismiss="modal" type="button">Projekt schließen <i class="bi bi-x-lg ms-1"></i></button>
            </div>
        </div>
    </div>
</div>

<!-- portfolio modal item 6-->
<div class="modal fade p-modal" id="PModal6" tabindex="-1" role="dialog" aria-labelledby="myTitle6" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="<?php echo get_template_directory_uri(); ?>/img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle6">Traumfenster</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Fotografie, die den Betrachter auf eine Reise durch Träume und Realität nimmt.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/6.jpg" alt="..." />
                <p class="my-4 col-lg-6 mx-auto">Dieses Fotografie-Projekt fängt die flüchtigen Momente zwischen Traum und Wirklichkeit ein. Durch die Linse betrachtet, verwandeln sich alltägliche Szenen in außergewöhnliche Visionen, die zum Nachdenken anregen und die Grenzen unserer Wahrnehmung herausfordern. Jedes Bild erzählt eine eigene Geschichte, reich an Emotionen und unerwarteten Perspektiven.</p>
                <ul class="list-inline mb-4">
                    <li><strong>Kunde:</strong> Traumfenster</li>
                    <li><strong>Kategorie:</strong> Fotografie</li>
                </ul>
                <button class="btn btn-danger btn-lg text-uppercase py-3" data-bs-dismiss="modal" type="button">Projekt schließen <i class="bi bi-x-lg ms-1"></i></button>
            </div>
        </div>
    </div>
</div>
