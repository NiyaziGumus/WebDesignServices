<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Niyazi Gümüs">
    <meta name="description" content="Webdesign und Marketing">
    <meta name="keywords" content="Web,Design,Gestaltung,Programmierung,Software,Entwicklung">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Web Design Services</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="page-body">
    <!-- navigation start-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
    <div class="container">
        <a href="#page-body" class="navbar-brand text-uppercase" title="new design website link"><img src="img/logo.svg" alt="logo"></a>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#myNavbar"
            aria-controls="myNavbar" aria-label="Toggle navigation" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="myNavbar" aria-labelledby="myLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="myLabel">Menü</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Schließen">
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto text-uppercase py-lg-2" data-bs-dismiss="offcanvas">
                    <li class="nav-item"><a href="#services" class="nav-link">Dienstleistungen</a></li>
                    <li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">Über uns</a></li>
                    <li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- navigation end-->



    <!--header start-->
    <header class="backImage text-white text-center">
        <div class="container">
            <div class="backImage-sub mb-4">Willkommen in unserem Studio!</div>
            <div class="backImage-heading text-uppercase">Schön, dich kennenzulernen</div>
            <a href="#services" class="btn btn-danger btn-lg p-lg-4 text-uppercase fw-bolder">Mehr erfahren</a>
        </div>
    </header>
    <!--header end-->

    <!-- services start-->
<section id="services" class="mySection">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="s-heading text-uppercase fw-bold">Dienstleistungen</h2>
            <h3 class="s-subheading text-muted">Entdecken Sie unsere professionellen Webdienste, die auf Ihre Bedürfnisse zugeschnitten sind.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center m-auto"
                    style="width: 8rem;height:8rem;" aria-hidden="true">
                    <i class="bi bi-cart" style="font-size: 4.5rem;"></i>
                </div>
                <h4 class="my-3 fw-bold">E-Commerce</h4>
                <p class="text-muted">Wir bieten maßgeschneiderte E-Commerce-Lösungen, die Ihnen helfen, Ihren Online-Handel effektiv zu betreiben und Ihre Umsätze zu steigern.</p>
            </div>
            <div class="col-md-4">
                <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center m-auto"
                    style="width: 8rem;height:8rem;" aria-hidden="true">
                    <i class="bi bi-laptop" style="font-size: 4.5rem;"></i>
                </div>
                <h4 class="my-3 fw-bold">Responsive Design</h4>
                <p class="text-muted">Unsere responsiven Webdesigns sorgen dafür, dass Ihre Website auf allen Geräten perfekt aussieht und funktioniert, von Desktops bis hin zu Smartphones.</p>
            </div>
            <div class="col-md-4">
                <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center m-auto"
                    style="width: 8rem;height:8rem;" aria-hidden="true">
                    <i class="bi bi-shield-lock" style="font-size: 4.5rem;"></i>
                </div>
                <h4 class="my-3 fw-bold">Web Sicherheit</h4>
                <p class="text-muted">Wir legen großen Wert auf die Sicherheit Ihrer Online-Präsenz und bieten fortschrittliche Lösungen zum Schutz Ihrer Website vor Cyberbedrohungen.</p>
            </div>
        </div>
    </div>
</section>
<!-- services end-->

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
                        <img class="img-fluid" src="img/portfolio/1.png" alt=".." />
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
                        <img class="img-fluid" src="img/portfolio/2.jpg" alt=".." />
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
                        <img class="img-fluid" src="img/portfolio/3.jpg" alt=".." />
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
                        <img class="img-fluid" src="img/portfolio/4.jpg" alt=".." />
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
                        <img class="img-fluid" src="img/portfolio/5.jpeg" alt=".." />
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
                        <img class="img-fluid" src="img/portfolio/6.jpg" alt=".." />
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

<!--about start-->
<section id="about" class="mySection">
    <div class="container">
        <div class="text-center mb-5 pb-3">
            <h2 class="s-heading text-uppercase fw-bold">Über uns</h2>
            <h3 class="s-subheading text-muted">Eine Reise von kleinen Anfängen zu großen Erfolgen.</h3>
        </div>
        <ul class="timeline">

            <li>
                <div class="t-image">
                    <img class="img-fluid rounded-circle" src="img/about/1.png" alt=".." />
                </div>
                <div class="t-panel">
                    <div class="t-heading">
                        <h4>2009-2013</h4>
                        <h4 class="subheading">Unsere bescheidenen Anfang</h4>
                    </div>
                    <div class="t-body">
                        <p class="text-muted">Die Gründung unseres Unternehmens, mit der Vision, Branchenstandards neu zu definieren und innovative Lösungen anzubieten.</p>
                    </div>
                </div>
            </li>
            <li class="t-inverted">
                <div class="t-image">
                    <img class="img-fluid rounded-circle" src="img/about/2.jpg" alt=".." />
                </div>
                <div class="t-panel">
                    <div class="t-heading">
                        <h4>April 2014</h4>
                        <h4 class="subheading">Die Geburt einer Agentur</h4>
                    </div>
                    <div class="t-body">
                        <p class="text-muted">Unsere Umwandlung in eine vollwertige Agentur, um unseren Kunden ein breiteres Spektrum an Dienstleistungen anzubieten.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="t-image">
                    <img class="img-fluid rounded-circle" src="img/about/3.jpg" alt=".." />
                </div>
                <div class="t-panel">
                    <div class="t-heading">
                        <h4>November 2015</h4>
                        <h4 class="subheading">Übergang zu einem Full-Service-Anbieter</h4>
                    </div>
                    <div class="t-body">
                        <p class="text-muted">Erweiterung unseres Portfolios, um unseren Kunden ein komplettes Serviceerlebnis aus einer Hand zu bieten.</p>
                    </div>
                </div>
            </li>
            <li class="t-inverted">
                <div class="t-image">
                    <img class="img-fluid rounded-circle" src="img/about/4.jpg" alt=".." />
                </div>
                <div class="t-panel">
                    <div class="t-heading">
                        <h4>September 2021</h4>
                        <h4 class="subheading">Phase Zwei der Expansion</h4>
                    </div>
                    <div class="t-body">
                        <p class="text-muted">Die Eröffnung neuer Büros im Ausland, um unsere globale Präsenz zu verstärken und internationale Märkte zu erschließen.</p>
                    </div>
                </div>
            </li>
            <li class="t-inverted">
                <div class="t-image">
                    <h4>Sei Teil <br /> unserer Geschichte!</h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--about end-->

 <!--team start-->
 <section id="team" class="mySection bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="s-heading text-uppercase fw-bold">Unser Team</h2>
            <h3 class="s-subheading text-muted">Zusammenarbeit und Innovation stehen im Mittelpunkt unseres Erfolgs.
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="t-member text-center">
                    <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="" />
                    <h4>Niyazi Gümüs</h4>
                    <p class="text-muted">Hauptdesigner</p>
                    <a href="#" class="btn btn-dark mx-2 btn-social">
                        <i class="bi bi-twitter-x text-white"></i>
                    </a>
                    <a href="#" class="btn btn-primary mx-2 btn-social">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-danger mx-2 btn-social">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="t-member text-center">
                    <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="" />
                    <h4>Lena Schmidt</h4>
                    <p class="text-muted">Marketingleiter</p>
                    <a href="#" class="btn btn-dark mx-2 btn-social">
                        <i class="bi bi-twitter-x text-white"></i>
                    </a>
                    <a href="#" class="btn btn-primary mx-2 btn-social">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-danger mx-2 btn-social">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="t-member text-center">
                    <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="" />
                    <h4>Murat Poyraz</h4>
                    <p class="text-muted">Chefentwickler</p>
                    <a href="#" class="btn btn-dark mx-2 btn-social">
                        <i class="bi bi-twitter-x text-white"></i>
                    </a>
                    <a href="#" class="btn btn-primary mx-2 btn-social">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-danger mx-2 btn-social">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="text-muted">Unser Team verbindet Leidenschaft mit Expertise, um innovative Lösungen zu
                    schaffen, die echte Probleme lösen und den Markt prägen.</p>
            </div>
        </div>
    </div>
</section>
<!--team end-->

<!-- clients start -->
<div class="container py-4">
    <div class="row align-items-center">
        <div class="col-sm-6 col-md-3 my-3">
            <a href="#">
                <img class="img-fluid d-block mx-auto img-logo" src="img/clients/google.svg" alt=".." />
            </a>
        </div>
        <div class="col-sm-6 col-md-3 my-3">
            <a href="#">
                <img class="img-fluid d-block mx-auto img-logo" src="img/clients/ibm.svg" alt=".." />
            </a>
        </div>
        <div class="col-sm-6 col-md-3 my-3">
            <a href="#">
                <img class="img-fluid d-block mx-auto img-logo" src="img/clients/facebook.svg" alt=".." />
            </a>
        </div>
        <div class="col-sm-6 col-md-3 my-3">
            <a href="#">
                <img class="img-fluid d-block mx-auto img-logo" src="img/clients/microsoft.svg" alt=".." />
            </a>
        </div>
    </div>
</div>
<!-- clients end -->

<!-- contact start-->
<section id="contact" class="mySection">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="s-heading text-uppercase fw-bold text-white">Kontakt</h2>
            <h3 class="s-subheading text-white">Setzen Sie sich mit uns in Verbindung. Wir freuen uns auf Ihre Nachricht.</h3>
        </div>
        <form class="needs-validation" action="result.php" id="FrmContact" novalidate>
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" id="name" class="form-control" placeholder="Ihr Name" required
                            maxlength="40" aria-describedby="ErrName">
                        <label for="name">Ihr Name
                            <span class="text-danger" aria-hidden="true">*</span>
                            <span class="visually-hidden">(erforderlich)</span>
                        </label>
                        <div class="invalid-feedback fst-italic fs-6" id="ErrName">Bitte geben Sie Ihren Namen ein.</div>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" id="email" class="form-control" placeholder="E-Mail" required
                            maxlength="100" aria-describedby="ErrEmail">
                        <label for="email">Ihre E-Mail-Adresse
                            <span class="text-danger" aria-hidden="true">*</span>
                            <span class="visually-hidden">(erforderlich)</span>
                        </label>
                        <div class="invalid-feedback fst-italic fs-6" id="ErrEmail">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="tel" id="phone" class="form-control" placeholder="Ihre Telefonnummer" required
                            maxlength="15" aria-describedby="ErrPhone">
                        <label for="phone">Ihre Telefonnummer
                            <span class="text-danger" aria-hidden="true">*</span>
                            <span class="visually-hidden">(erforderlich)</span>
                        </label>
                        <div class="invalid-feedback fst-italic fs-6" id="ErrPhone">Bitte geben Sie Ihre Telefonnummer ein.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating form-textarea mb-md-0">
                        <textarea id="message" class="form-control" placeholder="Ihre Nachricht" required maxlength="300"
                            aria-describedby="ErrMessage"></textarea>
                        <label for="message">Ihre Nachricht
                            <span class="text-danger" aria-hidden="true">*</span>
                            <span class="visually-hidden">(erforderlich)</span>
                        </label>
                        <div class="invalid-feedback fst-italic fs-6" id="ErrMessage">Bitte geben Sie eine Nachricht ein.</div>
                    </div>
                    <div class="text-white text-end">
                        <span id="current-character">0</span>
                        <span> / 300</span>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger btn-lg text-uppercase py-3 d-block w-100"
                    id="BtnContact">
                    Nachricht senden
                </button>
            </div>
        </form>
    </div>
</section>
<!-- contact end-->

    <!-- footer start -->
    <footer class="footer py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start text-muted">
                    Copyright &copy; Web Design 2024
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a href="#" class="btn btn-dark mx-2 btn-social">
                        <i class="bi bi-twitter-x text-white"></i>
                    </a>
                    <a href="#" class="btn btn-primary mx-2 btn-social">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-danger mx-2 btn-social">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#" class="link-info text-decoration-none me-3">Datenschutzrichtlinie</a>
                    <a href="#page-body" class="link-secondary text-decoration-none">Startseite</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

<!-- portfolio modal item 1-->
<div class="modal fade p-modal" id="PModal1" tabindex="-1" role="dialog" aria-labelledby="myTitle1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle1">Schattenprinz</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Einzigartige Illustration, die Fantasie und Realität verbindet.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/1.png" alt="..." />
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
                <img src="img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle2">Entdeckungsreise</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Ein grafisches Meisterwerk, das die Schönheit der Entdeckung einfängt.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/2.jpg" alt="..." />
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
                <img src="img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle3">Lineares Universum</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Eine Marke, die die Essenz von Einfachheit und Eleganz einfängt.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/3.jpg" alt="..." />
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
                <img src="img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle4">Matrix</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Die Evolution der Markenidentität in der digitalen Ära.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/4.jpg" alt="..." />
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
                <img src="img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle5">Tiefenlinie</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Ein Webdesign, das Tiefe und Navigation harmonisch verbindet.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/5.jpeg" alt="..." />
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
                <img src="img/close-icon.svg" alt="..." />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle6">Traumfenster</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Fotografie, die den Betrachter auf eine Reise durch Träume und Realität nimmt.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/6.jpg" alt="..." />
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



    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/custom/extra.js"></script>
</body>

</html>