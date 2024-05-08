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